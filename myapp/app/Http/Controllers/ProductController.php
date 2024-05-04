<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Brick\Math\BigInteger;

class ProductController extends Controller
{
    public function index()
    {
        $main_categories = MainCategory::all();
        $sub_categories = SubCategory::all();
        $products = Product::all();
        return view('admin/index', ['main_categories' => $main_categories, 'sub_categories' => $sub_categories,
                                    'products' => $products]); 
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
        $request->validate([
            'price' => 'required',
            'producer' => 'required|max:20',
            'model' => 'required|max:100',
            'model_year' => 'required',
            'frame' => 'required|max:20',
            'fork_type' => 'required|max:20',
            'frame_size' => 'required',
            'front_lift' => 'required',
            'fork' => 'required|max:100',
            'rear_shock' => 'required|max:100',
            'front_tire' => 'required|max:100',
            'rear_tire' => 'required|max:100',
            'rim' => 'required|max:100',
            'cassette_count' => 'required',
            'front_cassette_count' => 'required',
            'chain' => 'required|max:100',
            'drive_train' => 'required|max:100',
            'cranks' => 'required|max:100',
            'cassette' => 'required|max:100',
            'derailleur' => 'required|max:100',
            'brakes' => 'required|max:100',
            'front_rotor' => 'required|max:100',
            'rear_rotor' => 'required|max:100',
            'stem' => 'required|max:100',
            'handbar' => 'required|max:100',
            'grip' => 'required|max:100',
            'seat_post' => 'required|max:100',
            'seat' => 'required|max:100', 
        ]);

        $product = Product::create([
                'price' => $request->price,
                'producer' => $request->producer,
                'model' => $request->model,
                'model_year' => $request->model_year,
                'frame' => $request->frame,
                'fork_type' => $request->fork_type,
                'frame_size' => $request->frame_size,
                'front_lift' => $request->front_lift,
                'fork' => $request->fork,
                'rear_shock' => $request->rear_shock,
                'front_tire' => $request->front_tire,
                'rear_tire' => $request->rear_tire,
                'rim' => $request->rim,
                'cassette_count' => $request->cassette_count,
                'front_cassette_count' => $request->front_cassette_count,
                'chain' => $request->chain,
                'drive_train' => $request->drive_train,
                'cranks' => $request->cranks,
                'cassette' => $request->cassette,
                'derailleur' => $request->derailleur,
                'brakes' => $request->brakes,
                'front_rotor' => $request->front_rotor,
                'rear_rotor' => $request->rear_rotor,
                'stem' => $request->stem,
                'handbar' => $request->handbar,
                'grip' => $request->grip,
                'seat_post' => $request->seat_post,
                'seat' => $request->seat,
                'is_new' => $request->boolean('is_new'),
                'is_offer_of_the_week' => $request->boolean('is_offer_of_the_week'),
                'sub_categories' => $request->sub_category,
                'main_categories' => $request->main_category
            ]
        );

        $image_1 = request()->get('image_1', '');
        $image_2 = request()->get('image_2', '');
        $image_3 = request()->get('image_3', '');
        $image_4 = request()->get('image_4', '');

        


        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        $request->validate([
            'price' => 'required',
            'producer' => 'required|max:20',
            'model' => 'required|max:100',
            'model_year' => 'required',
            'frame' => 'required|max:20',
            'fork_type' => 'required|max:20',
            'frame_size' => 'required|max:1',
            'front_lift' => 'required',
            'fork' => 'required|max:100',
            'rear_shock' => 'required|max:100',
            'front_tire' => 'required|max:100',
            'rear_tire' => 'required|max:100',
            'rim' => 'required|max:100',
            'cassette_count' => 'required',
            'front_cassette_count' => 'required',
            'chain' => 'required|max:100',
            'drive_train' => 'required|max:100',
            'cranks' => 'required|max:100',
            'cassette' => 'required|max:100',
            'derailleur' => 'required|max:100',
            'brakes' => 'required|max:100',
            'front_rotor' => 'required|max:100',
            'rear_rotor' => 'required|max:100',
            'stem' => 'required|max:100',
            'handbar' => 'required|max:100',
            'grip' => 'required|max:100',
            'seat_post' => 'required|max:100',
            'seat' => 'required|max:100',
        ]);

        Product::find($id)->update([
            'price' => $request->price,
                'producer' => $request->producer,
                'model' => $request->model,
                'model_year' => $request->model_year,
                'frame' => $request->frame,
                'fork_type' => $request->fork_type,
                'frame_size' => $request->frame_size,
                'front_lift' => $request->front_lift,
                'fork' => $request->fork,
                'rear_shock' => $request->rear_shock,
                'front_tire' => $request->front_tire,
                'rear_tire' => $request->rear_tire,
                'rim' => $request->rim,
                'cassette_count' => $request->cassette_count,
                'front_cassette_count' => $request->front_cassette_count,
                'chain' => $request->chain,
                'drive_train' => $request->drive_train,
                'cranks' => $request->cranks,
                'cassette' => $request->cassette,
                'derailleur' => $request->derailleur,
                'brakes' => $request->brakes,
                'front_rotor' => $request->front_rotor,
                'rear_rotor' => $request->rear_rotor,
                'stem' => $request->stem,
                'handbar' => $request->handbar,
                'grip' => $request->grip,
                'seat_post' => $request->seat_post,
                'seat' => $request->seat,
                'is_new' => $request->boolean('is_new'),
                'is_offer_of_the_week' => $request->boolean('is_offer_of_the_week'),
                'sub_categories' => $request->sub_category,
                'main_categories' => $request->main_category
        ]);


        return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        Product::destroy($product);

        return redirect('admin');
    } 
}
