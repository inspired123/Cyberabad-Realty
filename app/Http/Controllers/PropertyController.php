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

class PropertyController extends Controller
{
 
 public function index()
    {
        
          
        $property = property::latest()->paginate(200);

$data = ['property'  =>$property];
return view('Admin.property-data')->with($data, (request()->input('page', 1) - 1) * 8);
    
        
    }  
  
	public function add()
    {
	
        
	return view('Admin.property-add');

    } 
	public function edit($id)
    {
                       
    $property = property::where('id', $id)->first();

   return view('Admin.property-edit', ['property' => $property]);
         
     

    }
	
	public function property_insert(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            'title' => 'required',
			'image' =>'required|image|mimes:jpg,png,gif,jpeg',
            'location' => 'required',
			'price' => 'required',
			'bedrooms' => 'required',
			'bathrooms' => 'required',
			'parking' => 'required',
			'sq_ft' => 'required',
			'type' => 'required'
        ]);
		

        if ($validator->passes()) {




	
$input['image'] = 'uploads'.'/'.time().'.'.$request->image->extension();  

$request->image->move('uploads', $input['image']);

$input['title'] = $request->title;
$input['location'] = $request->location;
$input['bedrooms'] = $request->bedrooms;
$input['bathrooms'] = $request->bathrooms;
$input['parking'] = $request->parking;
$input['sq_ft'] = $request->sq_ft;
$input['posted_by'] = 'Admin';
$input['type'] = $request->type;
$input['price'] = $request->price;
$input['status'] = 1;
$property = property::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
	
	
	public function property_update(Request $request, $id)
    {



    	$validator = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
			'price' => 'required',
			'bedrooms' => 'required',
			'bathrooms' => 'required',
			'parking' => 'required',
			'sq_ft' => 'required',
			'type' => 'required'
        ]);
		

        if ($validator->passes()) {



$input = $request->except(['_token']);
	


$input['title'] = $request->title;
$input['location'] = $request->location;
$input['bedrooms'] = $request->bedrooms;
$input['bathrooms'] = $request->bathrooms;
$input['parking'] = $request->parking;
$input['sq_ft'] = $request->sq_ft;
$input['posted_by'] = 'Admin';
$input['type'] = $request->type;
$input['price'] = $request->price;
$input['status'] = 1;

        $image = $request->file('image');
        if($image != '')
        {
             $input['image'] = 'uploads/'.time().'.'.$request->image->extension();  
         $request->image->move('uploads', $input['image']);
        }
        else
        {
           $input['image'] = $request->old_image;
        }


$property = property::find($id)->update($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
	
	public function home_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'farmhouse')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'farmhouse')
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
							<div class="sale-notic">FOR '.$type.'</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>'.$product->bedrooms.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> '.$product->address.' Square feets</p>
										<p><i class="fa fa-bed"></i> '.$product->bedrooms.' Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> '.$product->bathrooms.' Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> '.$product->posted_by.'</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="'.url('single-list').'/'.$product->id.'/'.str_replace(' ','_', $product->property_type).'" class="room-price">Rs'.$product->sale_price.'</a>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more" data-id="'.$last_id.'">Load More</button>
    </div>
  </div>
    </div>';
}
else
      {
       $output .= '
	   			<div class="container">

       <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
    </div>
  </div>
    </div>
       ';
      }
      echo $output;
}

// 	public function farmland_properties(Request $request)
// {
     
// $output = '';

//  if($request->id > 0)
//       {
// $id = $request->id;
// $events = DB::table('property')->where('status', '=', '1')
// ->where('property_type', '=', 'farmlands')
// ->where('id', '<', $id)
// ->orderBy('id', 'desc')->paginate(6);
//       }
//       else
//       {
// $events = DB::table('property')->where('status', '=', '1')
// ->where('property_type', '=', 'farmlands')
// ->orderBy('id', 'desc')->paginate(6);
//       }
      


// if(!$events->isEmpty())
// {
// foreach($events as $product)
// {
    
    
// $id = $product->id;
// $created_at=$product->created_at; 
// $linkurl = url($product->bedrooms);
// if($product->property_for =='1'){
// 	$type='RENT';
// }else{
// 	$type='SALE';
// }

// $output .= '<div class="col-lg-4 col-md-6">
// 					<!-- feature -->
// 					<div class="feature-item">
// 						<div class="feature-pic set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
// 							<div class="sale-notic">FOR '.$type.'</div>
// 						</div>
// 						<div class="feature-text">
// 							<div class="text-center feature-title">
// 								<h5>'.$product->bedrooms.'</h5>
// 								<p><i class="fa fa-map-marker"></i>'.$product->land_area.'</p>
// 							</div>
// 							<div class="room-info-warp">
// 								<div class="room-info">
// 									<div class="rf-left">
// 										<p><i class="fa fa-th-large"></i> '.$product->length_area.' Square feets</p>
// 										<p><i class="fa fa-bed"></i> '.$product->bedrooms.' Bedrooms</p>
// 									</div>
// 									<div class="rf-right">
// 										<p><i class="fa fa-car"></i> 2 Garages</p>
// 										<p><i class="fa fa-bath"></i> '.$product->soil_typeselect.' Bathrooms</p>
// 									</div>	
// 								</div>
// 								<div class="room-info">
// 									<div class="rf-left">
// 										<p><i class="fa fa-user"></i> '.$product->posted_by.'</p>
// 									</div>
// 									<div class="rf-right">
// 										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
// 									</div>	
// 								</div>
// 							</div>
// 							<a href="'.url('single-list').'/'.$product->id.'/'.str_replace(' ','_', $product->bedrooms).'" class="room-price">Rs'.$product->sale_price.'</a>
// 						</div>
// 					</div>
// 				</div>
				
				
				
// 				';
//                 $last_id = $product->id;
// }
// $output .= '
// 			<div class="container">

// 		  <div class="row" id="remove-row21">
//     <div class="col text-center">
//       <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more21" data-id="'.$last_id.'">Load More</button>
//     </div>
//   </div>
//     </div>';
// }
// else
//       {
//       $output .= '
// 	   			<div class="container">

//       <div class="row">
//     <div class="col text-center">
//       <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
//     </div>
//   </div>
//     </div>
//       ';
//       }
//       echo $output;
// }




	public function villa_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'villa')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'villa')
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
							<div class="sale-notic">FOR '.$type.'</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>'.$product->bedrooms.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> '.$product->address.' Square feets</p>
										<p><i class="fa fa-bed"></i> '.$product->bedrooms.' Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> '.$product->bathrooms.' Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> '.$product->posted_by.'</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="'.url('single-list').'/'.$product->id.'/'.str_replace(' ','_', $product->bedrooms).'" class="room-price">Rs'.$product->sale_price.'</a>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row11">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more11" data-id="'.$last_id.'">Load More</button>
    </div>
  </div>
    </div>';
}
else
      {
       $output .= '
	   			<div class="container">

       <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
    </div>
  </div>
    </div>
       ';
      }
      echo $output;
}

	public function banner_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')

->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')

->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<a href="'.url('single-list').'/'.$product->id.'/'.str_replace(' ','_', $product->bedrooms).'"><img src="'.url('').'/public/'.$product->image_file.'" alt="" style="height:800px;width:1349px;"></a>
				';
                $last_id = $product->id;
}

}

      echo $output;
}


	public function independent_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'independent')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'independent')
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<div class="col-md-6" onclick="javascript:redirect('.$product->id.')">
					<div class="propertie-item set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
						<div class="sale-notic">FOR '.$type.'</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>'.$product->address.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="price">Rs'.$product->sale_price.'</div>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row12">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more12" data-id="'.$last_id.'">Load More</button>
    </div>
  </div>
    </div>';
}
else
      {
       $output .= '
	   			<div class="container">

       <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
    </div>
  </div>
    </div>
       ';
      }
      echo $output;
}


	public function newlisted_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')

->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')

->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
							<div class="sale-notic">FOR '.$type.'</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> '.$product->total_area.' Square feets</p>
										<p><i class="fa fa-bed"></i> '.$product->bedrooms.' Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> '.$product->bathrooms.' Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> '.$product->posted_by.'</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="'.url('single-list').'/'.$product->id.'/'.str_replace(' ','_', $product->bedrooms).'" class="room-price">Rs'.$product->sale_price.'</a>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row19">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more19" data-id="'.$last_id.'">Load More</button>
    </div>
  </div>
    </div>';
}
else
      {
       $output .= '
	   			<div class="container">

       <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
    </div>
  </div>
    </div>
       ';
      }
      echo $output;
}



public function farmlands_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'farmlands')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'farmlands')
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '	<div class="col-md-6" onclick="javascript:window.location.href="http://google.com"">
					<div class="propertie-item set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
						<div class="sale-notic">FOR '.$type.'</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>'.$product->address.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="price">Rs'.$product->sale_price.'</div>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row21">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more21" data-id="'.$last_id.'">Load More</button>
    </div>
  </div>
    </div>';
}
else
      {
       $output .= '
	   			<div class="container">

       <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
    </div>
  </div>
    </div>
       ';
      }
      echo $output;
}



	public function apartment_properties(Request $request)
{
     
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'apartment')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(4);
      }
      else
      {
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', '=', 'apartment')
->orderBy('id', 'desc')->paginate(4);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_for =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '	<div class="col-md-6" >
					<div class="propertie-item set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
						<div class="sale-notic">FOR '.$type.'</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>'.$product->address.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="price">Rs'.$product->sale_price.'</div>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row13">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more13" data-id="'.$last_id.'">Load More</button>
    </div>
  </div>
    </div>';
}
else
      {
       $output .= '
	   			<div class="container">

       <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;">No More</button>
    </div>
  </div>
    </div>
       ';
      }
      echo $output;
}





	
	    	public function destroys($id){
   
    property::find($id)->delete($id);
  
    return response()->json([
        'success' => 'property deleted successfully!'
    ]);
}

        public function status(Request $request)
    {
        $user = property::find($request->id);
  
             $user->status= $request->status;
        
        
        $user->save();
  
        return response()->json(['success'=>$user->status]);
    }
public function search_simple(Request $request)
{
     
return view('search');


}

	
	public function home_properties1(Request $request)
{
     



$output = '';

 if($request->id > 0)
      {
$id = $request->id;
		$property_type=request()->segment(2);

		$location=request()->segment(3);
$events = DB::table('property')->where('status', '=', '1')

->where('id', '<', $id)
->where('property_type', 'LIKE', "%" . $property_type . "%")
 ->where('address', 'LIKE', "%" . $location . "%")
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
		$property_type=request()->segment(2);

		$location=request()->segment(3);



		
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', 'LIKE', "%" . $property_type . "%")
 ->where('address', 'LIKE', "%" . $location . "%")
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_type =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<div class="col-lg-6 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
							<div class="sale-notic">FOR '.$type.'</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>'.$product->bedrooms.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> '.$product->total_area_measurement.' Square feets</p>
										<p><i class="fa fa-bed"></i> '.$product->bedrooms.' Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> '.$product->bathrooms.' Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> '.$product->posted_by.'</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="'.url('property-details').'/'.$product->id.'/'.str_replace(' ','_', $product->bedrooms).'" class="room-price">Rs '.$product->sale_price.'/-</a>
						</div>
					</div>
				</div>';
                $last_id = $product->id;
}
$output .= '<div class="container"><div class="row" id="search-simple-remove"><div class="col text-center"><button class="btn btn-default" style="background: #30caa0; color:white;" id="simple-btn-more" data-id="'.$last_id.'">Load More</button></div></div></div>';
}
else
      {
       $output .= '<div class="container"><div class="row"><div class="col text-center"><button class="btn btn-default" style="background: #30caa0; color:white;">No More</button></div></div></div>';
      }

      echo $output;
}


public function home_properties1_count(Request $request)
{
     



$output = '';

 if($request->id > 0)
      {
$id = $request->id;
		$property_type=request()->segment(2);

		$location=request()->segment(3);
$events = DB::table('property')->where('status', '=', '1')

->where('id', '<', $id)
->where('property_type', 'LIKE', "%" . $property_type . "%")
 ->where('address', 'LIKE', "%" . $location . "%")
->orderBy('id', 'desc')->paginate(6);
echo count($events);
      }
      else
      {
		$property_type=request()->segment(2);

		$location=request()->segment(3);



		
$events = DB::table('property')->where('status', '=', '1')
->where('property_type', 'LIKE', "%" . $property_type . "%")
 ->where('address', 'LIKE', "%" . $location . "%")
->orderBy('id', 'desc')->paginate(6);
echo count($events);
      }
	  
}



	public function search_advance(Request $request)
{
     


$pfor =$request->pfor;
$search_location_value =$request->search_location_value;
$search_property_value =$request->search_property_value;
$search_bedrooms_value =$request->search_bedrooms_value;
$search_guest_value =$request->search_guest_value;
$search_year_value =$request->search_year_value;
$search_size_value =$request->search_size_value;

$search_price_value =$request->search_price_value;



      $output = '';

 if($request->id > 0)
      {
		  
		  
$id = $request->id;
$events = Property::query();

if (!empty($pfor)) {
    $events = $events->orWhere('property_for', '=', $pfor);
}

if (!empty($search_location_value)) {
    $events = $events->orWhere('location', 'like', '%'.$search_location_value.'%');
}

if (!empty($search_property_value)) {
    $events = $events->orWhere('property_type', 'like', '%'.$search_property_value.'%');
}

if (!empty($search_bedrooms_value)) {
    $events = $events->orWhere('bedrooms', 'like', '%'.$search_bedrooms_value.'%');
}

if (!empty($search_guest_value)) {
    $events = $events->orWhere('bathrooms', 'like', '%'.$search_guest_value.'%');
}

if (!empty($search_year_value)) {
    $events = $events->orWhere('age', 'like', '%'.$search_year_value.'%');
}


if($pfor == '1'){

	if (!empty($search_size_value)) {
			 $tags = explode(',', $search_size_value);
    $events = $events->whereIn('sale_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('sale_price', $tags);
}
}else{
	if (!empty($search_size_value)) {
		$tags = explode(',', $search_size_value);
    $events = $events->whereIn('rent_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('rent_price', 'like', $tags);
}
}


$id = $request->id;
$events = $events->where('id', '<', $id);
$events = $events->where('status', '=', '1');
$events = $events->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = Property::query();

if (!empty($pfor)) {
    $events = $events->orWhere('property_for', '=', $pfor);
}

if (!empty($search_location_value)) {
    $events = $events->orWhere('location', 'like', '%'.$search_location_value.'%');
}

if (!empty($search_property_value)) {
    $events = $events->orWhere('property_type', 'like', '%'.$search_property_value.'%');
}

if (!empty($search_bedrooms_value)) {
    $events = $events->orWhere('bedrooms', 'like', '%'.$search_bedrooms_value.'%');
}

if (!empty($search_guest_value)) {
    $events = $events->orWhere('bathrooms', 'like', '%'.$search_guest_value.'%');
}

if (!empty($search_year_value)) {
    $events = $events->orWhere('age', 'like', '%'.$search_year_value.'%');
}


if($pfor == '1'){

	if (!empty($search_size_value)) {
			 $tags = explode(',', $search_size_value);
    $events = $events->whereIn('sale_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('sale_price', $tags);
}
}else{
	if (!empty($search_size_value)) {
		$tags = explode(',', $search_size_value);
    $events = $events->whereIn('rent_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('rent_price', 'like', $tags);
}
}

$events = $events->where('status', '=', '1');
$events = $events->orderBy('id', 'desc')->paginate(6);



      }


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->bedrooms);
if($product->property_type =='1'){
	$type='RENT';
}else{
	$type='SALE';
}

$output .= '<div class="col-lg-6 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" style="background:url('.url('').'/public/'.$product->image_file.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
							<div class="sale-notic">FOR '.$type.'</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>'.$product->bedrooms.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->address.'</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> '.$product->total_area_measurement.' Square feets</p>
										<p><i class="fa fa-bed"></i> '.$product->bedrooms.' Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> '.$product->bathrooms.' Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> '.$product->posted_by.'</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="'.url('property-details').'/'.$product->id.'/'.str_replace(' ','_', $product->bedrooms).'" class="room-price">Rs '.$product->sale_price.'/-</a>
						</div>
					</div>
				</div>';
                $last_id = $product->id;
}
$output .= '<div class="container"><div class="row" id="search-advance-remove"><div class="col text-center"><button class="btn btn-default" style="background: #30caa0; color:white;" id="advance-btn-more" data-id="'.$last_id.'">Load More</button></div></div></div>';
}
else
      {
       $output .= '<div class="container"><div class="row"><div class="col text-center"><button class="btn btn-default" style="background: #30caa0; color:white;">No More</button></div></div></div>';
      }
      echo $output;
}


public function advance_count(Request $request)
{
     

$pfor =$request->pfor;
$search_location_value =$request->search_location_value;
$search_property_value =$request->search_property_value;
$search_bedrooms_value =$request->search_bedrooms_value;
$search_guest_value =$request->search_guest_value;
$search_year_value =$request->search_year_value;
$search_size_value =$request->search_size_value;

$search_price_value =$request->search_price_value;


$output = '';

 if($request->id > 0)
      {
$id = $request->id;
	$events = Property::query();

if (!empty($pfor)) {
    $events = $events->orWhere('property_for', '=', $pfor);
}

if (!empty($search_location_value)) {
    $events = $events->orWhere('location', 'like', '%'.$search_location_value.'%');
}

if (!empty($search_property_value)) {
    $events = $events->orWhere('property_type', 'like', '%'.$search_property_value.'%');
}

if (!empty($search_bedrooms_value)) {
    $events = $events->orWhere('bedrooms', 'like', '%'.$search_bedrooms_value.'%');
}

if (!empty($search_guest_value)) {
    $events = $events->orWhere('bathrooms', 'like', '%'.$search_guest_value.'%');
}

if (!empty($search_year_value)) {
    $events = $events->orWhere('age', 'like', '%'.$search_year_value.'%');
}


if($pfor == '1'){

	if (!empty($search_size_value)) {
			 $tags = explode(',', $search_size_value);
    $events = $events->whereIn('sale_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('sale_price', $tags);
}
}else{
	if (!empty($search_size_value)) {
		$tags = explode(',', $search_size_value);
    $events = $events->whereIn('rent_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('rent_price', 'like', $tags);
}
}

$events = $events->where('id', '<', $id);
$events = $events->where('status', '=', '1');
$events = $events->orderBy('id', 'desc')->paginate(6);
echo count($events);
      }
      else
      {

$events = Property::query();

if (!empty($pfor)) {
    $events = $events->orWhere('property_for', '=', $pfor);
}

if (!empty($search_location_value)) {
    $events = $events->orWhere('location', 'like', '%'.$search_location_value.'%');
}

if (!empty($search_property_value)) {
    $events = $events->orWhere('property_type', 'like', '%'.$search_property_value.'%');
}

if (!empty($search_bedrooms_value)) {
    $events = $events->orWhere('bedrooms', 'like', '%'.$search_bedrooms_value.'%');
}

if (!empty($search_guest_value)) {
    $events = $events->orWhere('bathrooms', 'like', '%'.$search_guest_value.'%');
}

if (!empty($search_year_value)) {
    $events = $events->orWhere('age', 'like', '%'.$search_year_value.'%');
}


if($pfor == '1'){

	if (!empty($search_size_value)) {
			 $tags = explode(',', $search_size_value);
    $events = $events->whereIn('sale_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('sale_price', $tags);
}
}else{
	if (!empty($search_size_value)) {
		$tags = explode(',', $search_size_value);
    $events = $events->whereIn('rent_price_measurement', $tags);
}

if (!empty($search_price_value)) {
	$tags = explode(',', $search_price_value);
    $events = $events->whereIn('rent_price', 'like', $tags);
}
}
$events = $events->where('status', '=', '1');
$events = $events->orderBy('id', 'desc')->paginate(6);
echo count($events);


      }
	  
}
}