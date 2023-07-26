<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
   public function store(Request $request){
      $image  = $request->file('file');
      $nameImage = Str::uuid().".".$image->extension();
      $imageServer = Image::make($image)->resize(1000,1000);
      $imageServer->fit(1000,1000);
      $path = public_path('uploads').'/'.$nameImage;
      $imageServer->save($path);
      return response()->json(['image'=>$nameImage]);
   }
}
