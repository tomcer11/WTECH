<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;

use Illuminate\Support\Facades\Session;

use function Symfony\Component\String\b;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $new_products = Product::where('is_new', true)->take(3)->get();
       $offer_products = Product::where([['is_offer_of_the_week', true], ['is_new', false]])->take(3)->get();
       return view('layout/index', ['new_products' => $new_products, 'offer_products' => $offer_products]); 
    }


    public function show_category(string $id) {
        $category = MainCategory::find($id);
        return view('layout.category')->with('category', $category);
    }



    
    public function show_sub_category(Request $request, string $id, string $s_id) {
        $paginate_count = 4;
    
        // Získanie značiek filtrov z query stringu (GET parametru brands)
        $selectedBrands = $request->input('brands', []);
        $selectedSizes = $request->input('sizes', []);
        $selectedWheels = $request->input('wheels', []);

        // Aplikovanie filtrov na produkty
        $productsQuery = Product::where('sub_category_id', $s_id);

        // Spracovanie filtračných parametrov
        $priceFrom = $request->input('price_from');
        $priceTo = $request->input('price_to');

        $from = false;
        $to = false;

        if (!empty($priceFrom)) {
            $from = true;
            Session::put('priceFrom', $priceFrom);
        }
        else {
            if (!$request->has('bar')) {
                if (Session::has('priceFrom')) {
                    $priceFrom = Session::get('priceFrom');
                    $from = true;
                }
            }
            else {
                Session::forget('priceFrom');
            }
        }


        if (!empty($priceTo)) {
            $to = true;
            Session::put('priceTo', $priceTo);
        }
        else {
            if (!$request->has('bar')) {
                if (Session::has('priceTo')) {
                    $priceTo = Session::get('priceTo');
                    $to = true;
                }
            }
            else {
                Session::forget('priceTo');
            }
        }


        if ($from) {
            if ($to) {
                $productsQuery->whereBetween('price', [$priceFrom, $priceTo]);
            }
            else {
                $productsQuery->where('price', '>', $priceFrom);
            }
        }
        else {
            if ($to) {
                $productsQuery->where('price', '<', $priceTo);
            }
        }

        



        if (!empty($selectedBrands)) {
            $productsQuery->whereIn('producer', $selectedBrands);
            $request->session()->put('selectedBrands', $selectedBrands);
        }
        else {
            if (!$request->has('bar')) {
                $storedBrands = $request->session()->get('selectedBrands');
                if (!empty($storedBrands)) {
                    $productsQuery->whereIn('producer', $storedBrands);
                }
            }
            else {
                $request->session()->put('selectedBrands', []);
            }
        }


        if (!empty($selectedSizes)) {
            $productsQuery->whereIn('frame_size', $selectedSizes);
            $request->session()->put('selectedSizes', $selectedSizes);
        }
        else {
            if (!$request->has('bar')) {
                $storedSizes = $request->session()->get('selectedSizes');
                if (!empty($storedSizes)) {
                    $productsQuery->whereIn('frame_size', $selectedSizes);
                }
            }
            else {
                $request->session()->put('selectedSizes', []);
            }
        }


        if (!empty($selectedWheels)) {
            $productsQuery->where(function ($query) use ($selectedWheels) {
                foreach ($selectedWheels as $wheel) {
                    $query->orWhere('rim', 'LIKE', "%{$wheel}%");
                }
            });
            $request->session()->put('selectedWheels', $selectedWheels);
        }
        else {
            if (!$request->has('bar')) {
                $storedWheels = $request->session()->get('selectedWheels');
                if (!empty($storedWheels)) {
                    $productsQuery->where(function ($query) use ($selectedWheels) {
                        foreach ($selectedWheels as $wheel) {
                            $query->orWhere('rim', 'LIKE', "%{$wheel}%");
                        }
                    });
                }
            }
            else {
                $request->session()->put('selectedWheels', []);
            }
        }






        if ($request->sort === 'asc') {
            $productsQuery->orderBy('price', 'asc');
        }
        elseif ($request->sort === 'desc') {
            $productsQuery->orderBy('price', 'desc');
        }
        Session::put('sort', $request->sort);

        if (!$request->has('sort')) {
            Session::put('sort', 'none');
        }
        
        
        

        $products = $productsQuery->paginate($paginate_count);

        $sort = $request->session()->get('sort');
        $selectedBrands = $request->session()->get('selectedBrands');
        $selectedSizes = $request->session()->get('selectedSizes');
        $selectedWheels = $request->session()->get('selectedWheels');

        $priceFrom = Session::get('priceFrom');
        $priceTo = Session::get('priceTo');

        $sub_category = SubCategory::find($s_id);


        // Návrat zobrazenia s danými
        return view('layout.sub_category')->with([
            'sub_category' => $sub_category, 
            'products' => $products,
            'selectedBrands' => $selectedBrands,
            'selectedSizes' => $selectedSizes,
            'selectedWheels' => $selectedWheels,
            'sort' => $sort,
            'priceFrom' => $priceFrom,
            'priceTo' => $priceTo
        ]);
    }


    public function search_items(Request $request) {
        $searched_text = $request->input('searching');
    
        if (empty($searched_text)) {
            $searched_text = Session::get('text');
        }
        else {
            Session::put('text', $searched_text);
        }

        
    
        $products = Product::where(function ($query) use ($searched_text) {
            // Rozdelíme hľadaný výraz na jednotlivé slová a prevedieme ich na malé písmená
            $keywords = explode(' ', strtolower($searched_text));
            
            // Pre každé slovo aplikujeme podmienku, že musí byť obsiahnuté v jednom zázname
            foreach ($keywords as $keyword) {
                $query->where(function ($query) use ($keyword) {
                    $query->where(function ($query) use ($keyword) {
                        $query->whereRaw("LOWER(CONCAT(producer, model, LEFT(rim, 4))) LIKE '%$keyword%'");
                    })
                    ->orWhere(function ($query) use ($keyword) {
                        $query->whereRaw("LOWER(CONCAT(producer, ' ', model, ' ', LEFT(rim, 4))) LIKE '%$keyword%'");
                    })
                    ->orWhere(function ($query) use ($keyword) {
                        $query->whereRaw("LOWER(CONCAT(producer, ' ', model, LEFT(rim, 4))) LIKE '%$keyword%'");
                    });
                });
            }
        });
    
        if ($request->sort === 'asc') {
            $products->orderBy('price', 'asc');
        }
        elseif ($request->sort === 'desc') {
            $products->orderBy('price', 'desc');
        }
        Session::put('sort', $request->sort);
    
        if (!$request->has('sort')) {
            Session::put('sort', 'none');
        }
    
        $sort = Session::get('sort');
        $term = Session::get('text');
    
        // Zavolanie metódy `get()` na dotazovacom builderi
        $products = $products->get();
    
        // Návrat zobrazenia s danými
        return view('layout.search')->with([ 
            'products' => $products,
            'sort' => $sort,
            'term' => $term
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}

