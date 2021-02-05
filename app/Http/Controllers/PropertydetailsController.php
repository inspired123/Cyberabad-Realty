<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;


use Mail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use App\Property;

class PropertydetailsController extends Controller
{
 
 public function single_list($id,$title)
    {
      
        $property = Property::where('id', $id)->first();
         
$data = ['property'  =>$property];
return view('single-list')->with($data, (request()->input('page', 1) - 1) * 8);
        
    }  
          public function getproperty_type(Request $request)
	{
	    
	 $id = $request->id;   
 $property = Property::where('id', $id)->first();
//echo  $property->property_type;
return response()->json(['response'=>$property]);
	
    }
	

}