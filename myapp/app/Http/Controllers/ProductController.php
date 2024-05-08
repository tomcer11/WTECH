<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

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
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {


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
                'sub_category_id' => $request->sub_category,
                'main_category_id' => $request->main_category
            ]
        );



        $image = $request->file('image');
        $image->store(options: 'public');

        Image::create([
            'product_id' => $product->id,
            'name' => $image->hashName(),
            'path' => storage_path(),
            'alt_text' => $request->{'alt_text'}
        ]);
       

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $s_id, $product_id)
    {
        $product = Product::find($product_id);
        return view('layout.product_detail')->with('product', $product);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {

        $product = Product::find($id);
        $product->update([
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
                'sub_category_id' => $request->sub_category,
                'main_category_id' => $request->main_category
        ]);

        $images = $product->images;
        
        for($i = 1; $i <= count($images); $i++){
                $images[$i - 1]->alt_text = $request->{'alt_text_'.$i};
                $images[$i - 1]->save();
        }

        if($request->file('image') != null) {

            $image = $request->file('image');
            $image->store(options: 'public');
            Image::create([
                'product_id' => $product->id,
                'name' => $image->hashName(),
                'path' => storage_path(),
                'alt_text' => $request->{'alt_text'}
            ]);
        }

        return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { 
        dd($id);
        $product = Product::find($id);
        $images = $product->images;
        foreach($images as $image) {
            Storage::disk('public')->delete($image->name);
            $image->delete();
        }

        $product->delete();

        
        return redirect('admin');
    } 
}
