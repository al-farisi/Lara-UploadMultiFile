<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Product;
use App\ProductsPhoto;

class UploadController extends Controller
{
    public function uploadForm(){
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request){
        $product = Product::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos','public');
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';
    }

    public function show($id){
        $product = Product::find($id);
        $photos=Product::find($id)->photos;
        //$data =ProductsPhoto::with('Product')->find($id);
        // dd($photos);
        return view('showpage',compact('product','photos'));
    }
}
