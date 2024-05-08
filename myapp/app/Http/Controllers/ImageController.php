<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function destroy($id) {
        $image = Image::find($id);
        $count = count(Image::where('product_id', $image->product_id)->get());

        if($count > 1) {
            Storage::disk('public')->delete($image->name);
            $image->delete();
            return redirect('admin');
        }
    }
}
