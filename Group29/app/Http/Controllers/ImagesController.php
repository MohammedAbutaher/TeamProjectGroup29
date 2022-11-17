
<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images; 


//
//
//

// out of date use products due to the drop of the images database 

//
//
//

class ImagesController extends Controller
{
    //
    public function create()
    {
        $photos = Images::all(); 
        return view('/basket', compact('photos'));
    }
    public function store(Request $request)
    {
      $name = $request->file('image')->getClientOriginalName(); 
      $size = $request->file('image')->getSize(); 
      $request->file('image')->store('public/images/');
      $photo = new Images(); 
      $photo->name = $name; 
      $photo->size = $size; 
      $photo->save();
      return redirect()->back(); 
    }
}
?>
*/ 