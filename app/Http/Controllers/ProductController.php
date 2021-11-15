<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductImage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show(Request $req)
    {
        
        $products = Product::get();
        foreach($products as $type){          
              // $products = Product::get();
            $images = ProductImage::where('product_id', '=', $type->id)->get();
            //dd($images);
             return view('components.product', ['images'=> $images]);
        }
        // fclose
              dd($images);

       return view('components.product', ['products' => $products]);
    }
}
    