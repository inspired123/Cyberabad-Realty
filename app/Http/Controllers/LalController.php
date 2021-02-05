<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class LalController extends Controller
{
    //
	
	
    
 public function index()
    {
        
          
        $property = property::where('id', 84)->first();

$data = ['property'  =>$property];
return view('multi-list')->with($data, (request()->input('page', 1) - 1) * 8);
    
        
    }  
}
