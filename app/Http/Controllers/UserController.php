<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;


use Mail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use App\Blog;
use App\Users;
use App\Profiles;
use App\Helpers\UserSystemInfoHelper;
use App\Sales;
use App\Property;
use File;
use App\Propertyenquiry;
use App\Advertise;


class UserController extends Controller
{
 
 public function index()
    {
        
          
        return view('login');
    
        
    }  
    public function home()
    {
		
		$sales =sales::where('status', 1)->paginate(500);
		$data = ['sales'  =>$sales];
		return view('index')->with($data, (request()->input('page', 1) - 1) * 8);
        
                                  
    }
    
    	public function user_panel()
	{
		return view('user-panel.indexmyprofile');
	
    }
	public function indexmyprofile()
	{
	    
		return view('user-panel.indexmyprofile');
	
    }
    public function advertisewithus()
	{
	    
		return view('user-panel.advertisewithus');
	
    }
    public function showuser()
	{
//  	    $id=Auth::User()->id;
//         $users=DB::table('users')->where('id', $id)->first();
// 	 $data = ['users '  =>$users];

		return view('user-panel.update-user');
	
    }
	public function addproperty()
	{
		return view('user-panel.addproperty');
	
    }
	public function addproperty1()
	{
		return view('user-panel.addproperty1');
	
    }
	public function indexmysearches()
	{
		return view('user-panel.indexmysearches');
	
    }
	public function indexmysearchesaved()
	{
		return view('user-panel.indexmysearchesaved');
	
    }
// 	public function indexmyenquiry()
// 	{
// 		return view('user-panel.indexmyenquiry');
	
//     }
	public function myservices()
	{
		return view('user-panel.indexmyservices');
	
    }
	public function indexmyproperty()
	{
		return view('user-panel.indexmyproperty');
	

    }
	public function indexmysavedproperties()
	{
		return view('user-panel.indexmysavedproperties');
	
    }
   public function usersubmit_property(Request $request)
    {
	
	$input = $request->all();
			

   $input['additional_rooms']='';
   if(!empty($request->additional_rooms)){
        				foreach($request->additional_rooms as $chk2)  
   {  
       
      $input['additional_rooms'] .= $chk2.",";  
   } 
   }
  
   $input['include_price']='';
      if(!empty($request->include_price)){
          	foreach($request->include_price as $chk3)  
   {  
      $input['include_price'] .= $chk3.",";  
   } 


      }

   $input['additional_furnishing']='';
         if(!empty($request->additional_furnishing)){

   				foreach($request->additional_furnishing as $chk6)  
   {  
      $input['additional_furnishing'] .= $chk6.",";  
   } 
   

}
    $input['amenities']='';
             if(!empty($request->amenities)){
	foreach($request->amenities as $chk7)  
   {  
      $input['amenities'] .= $chk7.",";  
   } 
             }
   $input['over_looking'] ='';
                if(!empty($request->over_looking)){
	foreach($request->over_looking as $chk8)  
   {  
      $input['over_looking'] .= $chk8.",";  
   } 
   

}
   
      			
   $input['owner_type']='';
                   if(!empty($request->owner_type)){
	foreach($request->owner_type as $chk9)  
   {  
      $input['owner_type'] .= $chk9.",";  
   } 
				
                   }
				
			 	
if($request->hasFile('image_file'))
{
$file = $request->image_file;
$extension = $file->getClientOriginalExtension();
        $input['image_file'] = 'uploads/'.time().'.'.$request->image_file->extension();  
        $request->image_file->move(public_path('uploads'), $input['image_file']);

}



$image_code = '';
     $images = $request->file('multi_images');
     foreach($images as $image)
     {
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('uploads'), $new_name);
	  $iii[]=$new_name;
     }
	 
		$input['multi_images']=implode(",",$iii);


           $input['status']=1;    
	
	if(!empty($request->owner_type)) {
	    $input['owner_type']=implode(",", $request->owner_type);
	    
	}
		if(!empty($request->additional_rooms)) {
	    
	    $input['additional_rooms']=implode(",", $request->additional_rooms);
	}
		if(!empty($request->include_price)) {
	    $input['include_price']=implode(",", $request->include_price);
	    
	}
		if(!empty($request->additional_furnishing)) {
	    
	    $input['additional_furnishing']=implode(",", $request->additional_furnishing);
	}
		if(!empty($request->amenities)) {
	    
	    $input['amenities']=implode(",", $request->amenities);
	}
		if(!empty($request->over_looking)) {
	    
	    $input['over_looking']=implode(",", $request->over_looking);
	}
		




$input['posted_by']=Auth::user()->id;
       //dd($input);
        Property::create($input);
        
     
    }





      
   

    


    public function sales_submit(Request $request)
    {

if($request->options == 'sales'){
	

    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'enterprise_name' => 'required',
			 'phone' => 'required',
			 'mail' => 'required',
			 'licence_document' => 'required',
			 'material_rate_chart' => 'required',
			 'logo' => 'required',
			 'address' => 'required',
			 'branch' => 'required',
			 'year' => 'required',
			 'websitelink' => 'required',
        ]);
}
else if($request->options == 'repair'){
	    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'enterprise_name' => 'required',
			 'phone' => 'required',
			 'mail' => 'required',
			 'licence_document' => 'required',
			 'service' => 'required',
			 'logo' => 'required',
			 'address' => 'required',
			 'exp' => 'required',
			 'year' => 'required',
			 'websitelink' => 'required',
        ]);
}

        if ($validator->passes()) {


if($request->hasFile('logo'))
{
$file = $request->logo;
$extension = $file->getClientOriginalExtension();
        $input['logo'] = 'uploads/'.time().'.'.$request->logo->extension();  
        $request->logo->move(public_path('uploads'), $input['logo']);

}


$input['name'] = $request->name;
$input['enterprise_name'] = $request->enterprise_name;
$input['phone'] = $request->phone;
$input['mail'] = $request->mail;
$input['licence_document'] = $request->licence_document;

$input['logo'] = $request->logo;
$input['address'] = $request->address;

$input['year'] = $request->year;
$input['websitelink'] = $request->websitelink;
$input['status'] = 1;
if($request->options == 'sales'){
	$input['material_rate_chart'] = $request->material_rate_chart;
	$input['branch'] = $request->branch;
}
else if($request->options == 'repair'){
	$input['exp'] = $request->exp;
	$input['service'] = $request->service;
}
$sales = sales::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
	public function electrical1()
	{
	    $id=Auth::User()->id;
        $users=DB::table('users')->where('id', $id)->first();
	 $data = ['users '  =>$users];
		return view('user-panel.electrical1');
	
    }
    public function indexuserserviceform()
	{
		return view('user-panel.indexuserserviceform');
	
    }
    
    
 public function get_countries(request $request)
    {
        

      $data = Country::latest()->paginate(200);

      $output = '';

      foreach($data as $row)
      {
      // $output .= '<li data-value="'.$row->city_name.'" class="option selected focus">'.$row->city_name.'</li>';
        $output .= '<option value="'.$row->countryname.'" class="test"  data-thumbnail="'.url('/').'/'.$row->countryflag.'">'.$row->countryname.'</li>';
      }

      $countries = Country::latest()->paginate(200);
    return response()->json(['countries'=>$countries,'output'=>$output]);

       
       
            


}

        



    
    
    
    
   

public function user_register(Request $request)
	{
		$validator = Validator::make($request->all(), [
		
			'first' => 'required',
			'last' => 'required',
			'email' => 'required|email|unique:users',
			'Mobileno' => 'required',
			
			'password' => 'required',
			'confirm_password' => 'required|same:password',
			
			
			
   
		]);
		
        
			
		if ($validator->passes()) {

			$getip = UserSystemInfoHelper::get_ip();
		$getbrowser = UserSystemInfoHelper::get_browsers();
		$getdevice = UserSystemInfoHelper::get_device();
		$getos = UserSystemInfoHelper::get_os();
	
	   $data['ip']= $getip ;
	   $data['browser']= $getbrowser ;
	   $data['device']= $getdevice ;
	   $data['os']= $getos ;
	   $data['first'] =$request->input('first');
	   $data['last'] =$request->input('last');
	   $data['email'] =$request->input('email');
	   $data['Mobileno'] =$request->input('Mobileno');
	   $data['password'] =Hash::make($request->input('password'));
	    $data['role'] =$request->input('role');
	  

	    Users::create($data);
   
   
		  


			
		
   
   
			 return Response::json(['success' => '1']);
   
		}
		
		return Response::json(['errors' => $validator->errors()]);
	}
	
	
	public function update(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
		//'profile' => 'required|mimes:jpg,png',
           
           // 'first' => 'required',
		//	'last' => 'required',
			
         //  'email' => 'required',
          //  'Mobileno' => 'required',
			
			//'password' => 'required',
			//'confirm_password' => 'required|same:password',
//'address' => 'required',
		//	'city' => 'required',
			//'country' => 'required',
		//	'postal' => 'required',

			'description' => 'required',

        ]);
      
      

        		
		if ($validator->passes()) {
                
			$getip = UserSystemInfoHelper::get_ip();
		$getbrowser = UserSystemInfoHelper::get_browsers();
		$getdevice = UserSystemInfoHelper::get_device();
		$getos = UserSystemInfoHelper::get_os();
	
	   $data['ip']= $getip ;
	   $data['browser']= $getbrowser ;
	   $data['device']= $getdevice ;
	   $data['os']= $getos ;
	   $data['first'] =$request->input('first');
	   $data['last'] =$request->input('last');
	   $data['email'] =$request->input('email');
	   $data['Mobileno'] =$request->input('Mobileno');
	   $data['password'] =Hash::make($request->input('password'));
	   	   $data['email'] =$request->input('email');

	  

	   $data['address'] =$request->input('address');

	   $data['city'] =$request->input('city');

	   $data['country'] =$request->input('country');
	   
	    $data['postal_code'] =$request->input('postal');

	    $data['role'] =$request->input('role');
	    
	     $data['description'] =$request->input('description');

	  

          
		
        $logos = $request->file('profile_pic');
       if($logos != '')
       {
            $data['profile_pic'] = 'uploads/'.time().'.'.$request->profile_pic->extension();  
         $request->profile_pic->move(public_path('uploads'), $data['profile_pic']);
       }
       else
       {
          $data['profile_pic'] = $request->old_profile_pic;
       }	

			

        
         $id=Auth::user()->id;
        $user = Users::find($id);

            $user->update($data);


       
        
 
 
			 return Response::json(['success' => '1']);
   
		}
		
		return Response::json(['errors' => $validator->errors()]);
	}
	
	
	
		public function single_list()
    {
        
          
        return view('single-list');
    
    } 
	
	
		public function single_list_enquiry(Request $request)
    {
        
          
        
        $validator = Validator::make($request->all(), [
	
             'name' => 'required',
             'email' => 'required',
             'question' => 'required',
             
			
			
		

        ]);

        	$input = $request->all();
        if ($validator->passes()) {
            
             
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');

        $data['question'] = $request->input('question');
        
        $data['property_id'] = $request->input('property_id');


       

		propertyenquiry::create($data);
            
             return Response::json(['success' => '1']);
}
        
       return Response::json(['errors' => $validator->errors()]);
  
}

	public function indexmyenquiry()
	{
	    
	    $propertyenquiry = DB::select('select * from propertyenquiry');
return view('user-panel.indexmyenquiry',['propertyenquiry'=>$propertyenquiry]);
// 	     $propertyenquiry = Propertyenquiry::latest()->paginate(8);

// $data = ['Propertyenquiry'  =>$propertyenquiry];
// return view('user-panel.indexmyenquiry')->with($data, (request()->input('page', 1) - 1) * 8);
	
    }
    
    
    
    public function getdata(Request $request)
	{
	    
	 $id = $request->id;   
 $users=DB::table('propertyenquiry')->where('id', $id)->first();
echo  $users->question;
	
    }
    

    
    	public function reply(Request $request)
    {
        $validator = Validator::make($request->all(), [
	
            // 'name' => 'required',
            // 'email' => 'required',
            // 'question' => 'required',
            // 'message' => 'required',
             'reply' => 'required',

            
			
			
		

        ]);

        	$input = $request->all();
        if ($validator->passes()) {
            
             
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');

        $data['question'] = $request->input('question');

        $data['message'] = $request->input('message');
        $data['reply'] = $request->input('reply');

	 
         $id=Auth::user()->id;
         $user=DB::table('propertyenquiry')->where('id', $id)->first();

        $user->update($data);


       propertyenquiry::update($data);
        
 
 
			 return Response::json(['success' => '1']);
   
		}
		
		return Response::json(['errors' => $validator->errors()]);
	}


    
  	public function user_properties(Request $request)
{
   
   
       $events=Auth::User()->id;
  
$output = '';

 if($request->id > 0)
      {
$id = Auth::User()->id;
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

		  <div class="row" id="remove-row31">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more31" data-id="'.$last_id.'">Load More</button>
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
  
  
  
   public function advertise_submit(Request $request)
    {


    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'email' => 'required|email',
            'phone' => 'required|digits:10',
            'state' => 'required',
             'city' => 'required',
            'country' => 'required',
             'postal_code' => 'required',
            'address' => 'required',
            // 'full' => 'required',
           
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Advertise::create($input);
  
                                   
			return response()->json(['error'=>'1']);
        }


    	return response()->json(['error'=>$validator->errors()]);
    }  
    
}