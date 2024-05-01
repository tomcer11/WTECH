<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin'); 
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
        $product = new Product([
                'price' => request()->get('price', 0),
                'producer' => request()->get('producer', ''),
                'model' => request()->get('model', ''),
                'model_year' => request()->get('model_year', 0),
                'frame' => request()->get('frame', ''),
                'fork_type' => request()->get('fork_type', ''),
                'frame_size' => request()->get('frame_size', ''),
                'front_lift' => request()->get('front_lift', 0),
                'fork' => request()->get('fork', ''),
                'rear_shock' => request()->get('rear_shock', ''),
                'front_tire' => request()->get('front_tire', ''),
                'rim' => request()->get('rim', ''),
                'cassete_count' => request()->get('cassete_count', 0),
                'front_cassete_count' => request()->get('front_cassete_count', ''),
                'chain' => request()->get('chain', ''),
                'drive_train' => request()->get('drive_train', ''),
                'cranks' => request()->get('cranks', ''),
                'cassette' => request()->get('cassette', ''),
                'derailleur' => request()->get('derailleur', ''),
                'brakes' => request()->get('brakes', ''),
                'front_rotor' => request()->get('front_rotor', ''),
                'stem' => request()->get('stem', ''),
                'handbar' => request()->get('handbar', ''),
                'grip' => request()->get('grip', ''),
                'seat_post' => request()->get('seat_post', ''),
                'seat' => request()->get('seat', ''),
                'is_new' => request()->get('is_new', false),
                'is_offer_of_the_week' => request()->get('is_offer_of_the_week', false),
            ]
        );

        $product->save();


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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
