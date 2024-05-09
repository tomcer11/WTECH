<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;

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
        $paginate_count = 1;
        
        if ($request->has('sort')) {
            if ($request->sort === 'asc') {
                $products = Product::where('sub_category_id', $s_id)->orderBy('price', 'asc')->paginate($paginate_count);
            } elseif ($request->sort === 'desc') {
                $products = Product::where('sub_category_id', $s_id)->orderBy('price', 'desc')->paginate($paginate_count);
            }
        } else {
            // Ak nie je nastavený parameter sort, tak zobrazíme produkty bez zmeny poradia
            $products = Product::where('sub_category_id', $s_id)->paginate($paginate_count);
        }


        
        $request->session()->put('sort', $request->sort);
        $sort = $request->session()->get('sort');

        $sub_category = SubCategory::find($s_id);

        
        return view('layout.sub_category')->with([
            'sub_category' => $sub_category, 
            'products' => $products,
            'sort' => $sort,
        ]);

        //return view('layout.sub_category')->with(['sub_category' => $sub_category, 'products' => $products]);
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

