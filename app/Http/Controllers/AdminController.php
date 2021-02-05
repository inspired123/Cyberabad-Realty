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
use App\Subscribe;
use App\Property;
use File;
use App\Sales;
use App\Contact;
use App\Enquiry;
use App\Slides;
use App\Farmlandslides;
use App\addbuillderform;
use App\Locations;
use App\Interior_service;
use App\Advertise;

use App\Helpers\UserSystemInfoHelper;


class AdminController extends Controller
{
 
 public function index()
    {
        
          
        return view('login');
    
        
    }  
	
	
    
    
	
    public function home(){
        $user = auth()->guard('admin')->user();
  if ($user)
{
$data = ['user' => $user];
   return view('Admin.index', $data);
     
}

}
    

	
	
	public function ApartmentSaleRent1()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.ApartmentSaleRent1')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	public function villa()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.Villa')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	public function plot()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.plot')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	public function farmlands()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.farmlands')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	public function farmhouse()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.farmhouse')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	public function independent_house()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.independent-house')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	public function addpropertyfinal()
    {
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('Admin.addpropertyfinal')->with($data, (request()->input('page', 1) - 1) * 8);

    }
	
	
	
	
	

	
	
	public function newsletter_table()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
		
        $subscribe = subscribe::latest()->paginate(8);

		$data = ['subscribe'  =>$subscribe, 'user'  =>$user];
		return view('Admin.newsletter-table')->with($data, (request()->input('page', 1) - 1) * 8);
          
    }  
    }
    
	public function userdetails()
    {
 
          return view('Admin.userdetails');
    }
	public function cities()
    {
 
          return view('Admin.cities');
    }
	public function propertytype()
    {
 
          return view('Admin.propertytype');
    }
	
    public function slides()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $slides = Slides::latest()->paginate(8);

$data = ['slides'  =>$slides];
return view('Admin.slides')->with($data, (request()->input('page', 1) - 1) * 8);

 
}
    }
    public function slide_submit(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            
             'title' => 'required',
             'logo' => 'required',
        ]);
		

        if ($validator->passes()) {




if($request->hasFile('logo'))
{
$file = $request->logo;
$extension = $file->getClientOriginalExtension();
        $input['logo'] = 'uploads/'.time().'.'.$request->logo->extension();  
        $request->logo->move(public_path('uploads'), $input['logo']);

}

$input['title'] = $request->title;

$input['status'] = 1;
$slides = slides::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }


	public function enquiries()
    {
 
          return view('Admin.enquiries');
    }
	public function add_userdetails()
    {
 
          return view('Admin.add-userdetails');
    }
	public function add_cities()
    {
 
          return view('Admin.add-cities');
    }
	public function add_propertytype()
    {
 
          return view('Admin.add-propertytype');
    }
	public function add_slides()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
 
          return view('Admin.add-slides');
    }
    }
	public function contact_table()
    {
	 $user = auth()->guard('admin')->user();
  if ($user){
$data = ['user' => $user];
 $contact = Contact::all();
   return view('Admin.contact-table', $data)
      ->with('contact',$contact); 
}
 
 
    }
    
    	public function advertise_table()
    {
	 $user = auth()->guard('admin')->user();
  if ($user){
$data = ['user' => $user];
 $advertise = Advertise::all();
   return view('Admin.advertise-table', $data)
      ->with('advertise',$advertise); 
}
 
 
    }
    
    public function enquirie_table()
    {
  $user = auth()->guard('admin')->user();
  if ($user){
$data = ['user' => $user];
  $enquiry = Enquiry::all();
   return view('Admin.enquiries-table', $data)
          ->with('enquiry',$enquiry);
}
    }
	public function add_newsletter()
    {
 
          return view('Admin.add-newsletter');
    }
    
	
	
	
     public function privacy_policy()
    {
 return view('index');
    }
    public function terms_conditions()
    {
 return view('index');
    }
    
    public function terms()
    {
 return view('index');
    }
         public function faq()
    {
 return view('index');
    }
    
          public function pricing()
    {
      return view('index');
    }
             
    public function registration()
    {
               return view('index');
    }
     
         public function userLogin(Request $request)
    {
        request()->validate([
        'email' => 'required|email',
        'password' => 'required',
        ]);
 


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
		return back()->with('message', 'Wrong Login Details');
       // return Redirect::to("login")->with('message', 'Oppes! You have entered invalid credentials');
    }
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required|email',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin-dashboard');
        }
		return back()->with('message', 'Wrong Login Details');
       // return Redirect::to("login")->with('message', 'Oppes! You have entered invalid credentials');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        
        ]);
         
     $data['password']= Hash::make($request->input('password'));

 $data['name']= $request->input('name');
 $data['email']= $request->input('email');

       User::create($data);
       
       
Mail::send('emails.signup', $data, function ($message) use ($data) {


$message->to($data['email'], 'subscribe');
$message->from('kmlalnehru9@gmail.com', 'NRI EVENTS');
$message->subject('Thankyou for signing up with us');
});
 $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard')->with('success', 'Thankyou for signing up with us');
        }

    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
		  Session::flash('message','Great! You have Successfully loggedin');

       // return view('profile', ['user' => Auth::user()]);
       
       if(Auth::user()['status'] == '0'){
           Session::flush();
        Auth::logout();
          return Redirect::to("admin-login")->with('locked', 'your account has been temporarily locked.please contact admin');
       }
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
   $countries = Country::latest()->orderBy('countrycode', 'asc')->paginate(500);
$data = ['cat'   => $cat, 'countries'   => $countries, 'popular_cities' => $popular_cities,'user'   => Auth::user()];
return view('profile')->with($data, (request()->input('page', 1) - 1) * 8);

      }
       return Redirect::to("admin-login")->with('message', 'Opps! You do not have access');
    }
    
    
    
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
       
      ]);
    }
     
    public function user_logout() {
        Session::flush();
        //Auth::logout();

        return Redirect('logins');
    }
    
     public function logout() {
        Session::flush();
        auth('admin')->logout();
        return Redirect('admin-login');
    }
	public function changepassword()
    {
            $countries = Country::latest()->paginate(1);
            $cat = Cat::orderBy('id', 'asc')->paginate(11);
                     $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
            $data = [
    'countries'   => $countries,
    'cat'   => $cat,
    'popular_cities' => $popular_cities
];
        return view('change-password')
            ->with($data, (request()->input('page', 1) - 1) * 8);
        //return view('change-password');
    }
	
	public function contact()
    {
        
return view('contact');

    }
	public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['required', 'same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
		return Redirect::to("change-password")->with('password_success', 'Password changed successfully');
    }
    
    
    public function update(Request $request, User $user)
    {
        $request->validate([
                 'email' => 'required',
            'name' => 'required',
             'phone_no' => 'required|numeric|digits:10',
              'gender' => 'required',
               'dob' => 'required',
                'country' => 'required'
        ]);
   $data = $request->all();
   $id=Auth::user()->id;
 $user = User::find($id);

    $user->update($request->all());



    
                        return Redirect::to("dashboard")->with('success', 'Profile updated successfully');
    }
    
               public function subscribe(Request $request)
    {


    	$validator = Validator::make($request->all(), [
             'subscribe_email' => 'required|email'
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Subscribe::create($input);

$data['email'] = $request->post('subscribe_email');





Mail::send('emails.subscribe_email', $data, function ($message) use ($data) {


$message->to($data['email'], 'subscribe');
$message->from('kmlalnehru9@gmail.com', 'NRI EVENTS');
$message->subject('Thank you for Subscribe');
});

if (Mail::failures()) {
}else{

}


			return response()->json(['success'=>'Thank you for Subscribe us']);
        }


    	return response()->json(['error'=>$validator->errors()->all()]);
    }
    
    

    
        public function contact_submit(Request $request)
    {


    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'subject' => 'required',
           
            'description' => 'required',
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Contact::create($input);
   $data = [
            'name' => $request->input('name'),
            'email'    => $request->input('email'),
            'description'=>$request->input('description'),
            'subject'=>$request->input('subject'),
            'mobile'=>$request->input('mobile')

        ];
        
        
        Mail::send('emails.contact_data', $data, function($message)  use ($data) {
        
        $admin = DB::table('admins')->where('id', 1)->first();
        $data['emails'] = $admin->email;


        $message->to($data['emails'], 'nrievents')
        ->from('contact@nrievents.com', 'nrievents')
        ->subject('Contact us - '.$data['name']);


        });
        
        if (Mail::failures()) {

        }else{
        }
        
        
        
        
        
                 $data1 = [
            'email'    => $request->input('email'),
             'name'    => $request->input('name'),
            'msg'    => 'Thank you for contacting us – we will get back to you soon!'

        ];
        
        
        Mail::send('emails.contact_data1', $data1, function($message)  use ($data1) {
     


        $message->to($data1['email'], 'nrievents')
        ->from('contact@nrievents.com', 'nrievents')
        ->subject('Thank you for contacting us – we will get back to you soon!');


        });
        
        if (Mail::failures()) {

        }else{
            
        }  
                                   
			return response()->json(['error'=>'1']);
        }


    	return response()->json(['error'=>$validator->errors()]);
    }
    
    
    
    public function normal_events(Request $request)
{
     

$country= $request->country;

 $coun = DB::table('country')->where('countryname', $country)->first();

$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('events')->where('status', '=', '1')
->where('popular', '=', '0')
->where('country', '=', $coun->id)
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('events')->where('status', '=', '1')
->where('popular', '=', '0')
->where('country', '=', $coun->id)
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
        $countr = DB::table('country')->where('id', $product->country)->first();
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><img src="'.url('public').'/'.$product->logo.'" data-src="public/'.$product->logo.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><b>'.$product->title.'</b></a></span>
                            </div>
                            <div class="dates"><span uk-icon="calendar"></span>'.date('d-M-Y', strtotime($product->start_date)).'</div>
                            <div class="venue">
                               <span uk-icon="icon: location"></span>  <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" title="'.$product->venue.'">'.$product->venue.'</a>
                            </div>
                        </div>
                        <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE EVENTS</span>
            </button>
        </div>';
}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO EVENTS</span>
            </button>
        </div>
       ';
      }
      echo $output;
}

    public function get_popular_events(Request $request)
{
    

    
$country= $request->country;
$coun = DB::table('country')->where('countryname', $country)->first();

$output = '';

      if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('events')->where('status', '=', '1')
->where('popular', '=', '1')
->where('country', '=', $coun->id)
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('events')->where('status', '=', '1')
->where('popular', '=', '1')
->where('country', '=', $coun->id)
->orderBy('id', 'desc')->paginate(6);
      }



if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    $countr = DB::table('country')->where('id', $product->country)->first();
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self">
                            <img src="'.url('public').'/'.$product->logo.'" data-src="public/'.$product->logo.'" class="uk-responsive" alt="" uk-img>
                            </a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><b>'.$product->title.'</b></a></span>
                            </div>
                            <div class="dates"><span uk-icon="calendar"></span>'.date('d-M-Y', strtotime($product->start_date)).'</div>
                            <div class="venue">
                               <span uk-icon="icon: location"></span>  <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" title="'.$product->venue.'">'.$product->venue.'</a>
                            </div>
                        </div>
                        <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row1">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more1" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE EVENTS</span>
            </button>
        </div>';

}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO EVENTS</span>
            </button>
        </div>
       ';
      }
      echo $output;
}

 public function user_events(Request $request)
{
    $create_by=Auth::User()->id;
$output = '';
$id = $request->id;
$events = DB::table('events')->where('status', '=', '1')
->where('create_by', $create_by)
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
if(!$events->isEmpty())
{
foreach($events as $product)
{
    
        $countr = DB::table('country')->where('id', $product->country)->first();
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><img src="'.url('public').'/'.$product->logo.'" data-src="public/'.$product->logo.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self">'.$product->title.'</a></span>
                            </div>
                            <div class="dates"><span uk-icon="calendar"></span>'.date('d-M-Y', strtotime($product->start_date)).'</div>
                            <div class="venue">
                               <span uk-icon="icon: location"></span>  <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" title="'.$product->venue.'">'.$product->venue.'</a>
                            </div>
                        </div>
                        <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more" data-id="'.$product->id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE EVENTS</span>
            </button>
        </div>';
echo $output;
}
}

 
 
 
      public function bannerdetails($id)
    {
       

            $banners = Banners::where('id', $id)->first(); 
$cat = Cat::orderBy('id', 'asc')->paginate(11);
$popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
$countries = Country::latest()->paginate(10);
$data = ['banners'  =>$banners,'cat'   => $cat,'popular_cities' => $popular_cities,'countries'=>$countries];
return view('banner-details')->with($data, (request()->input('page', 1) - 1) * 8);
    }
    
        function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('events')
        ->where('title', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      if(count($data) > 0){
      foreach($data as $row)
      {
       $output .= '<li id="" style="list-style: none;cursor: pointer;">'.$row->title.'</li>';
      }
      }else{
           $output .= '<li id="" style="list-style: none;">Results Not Found</li>';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    
    public function country(Request $request)
    {
        
        $country=$request->post('country');
Session::put('country', $country);
echo json_encode($country);

}

	public function forgot_password()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries];
return view('forgot_password')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    
    	public function forgot_password_post(Request $request)
    {
        
            //Validate input
    $validator = Validator::make($request->all(), [
        'email' => 'required|email' ]);

    //check if payload is valid before moving on
    if ($validator->fails()) {

          return redirect()->intended('forgot-password')->with('error', 'Enter Email address');

    }
    
    
//You can add validation login here
$user = DB::table('users')->where('email', '=', $request->email)
    ->first();
    $user2 = DB::table('users')->where('email', '=', $request->email)
    ->count();
//Check if the user exists

if ($user2 < 1) {

              return redirect()->intended('forgot-password')->with('error', 'User does not exist');

}
    $rawpassword = 'NE'.rand('111111','999999');
$data['email'] = $request->email;
$data['name'] = $user->name;
   $data['password']= Hash::make($rawpassword);
   $data['text_password']= $rawpassword;
//$password=Hash::make($rawpassword);

    DB::table('users')
        ->where('email', $request->email)  // find your user by their email
        ->update(array('password' => $data['password']));  // update the record in the DB. 
       
Mail::send('emails.forgot', $data, function ($message) use ($data) {


$message->to($data['email'], 'Forgot password');
$message->from('kmlalnehru9@gmail.com', 'NRI EVENTS');
$message->subject('Password Successfully Changed');
});


  return redirect()->intended('logins')->with('success', 'Successfully Password Changed,Please check your Email');
    }
    
        
    	public function not_found()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries];
return view('errors.404')->with($data, (request()->input('page', 1) - 1) * 8);

    }
        	public function server_error()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries];
return view('errors.500')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    

    
    
    
     public function cit_events(Request $request)
{
     

$city= $request->city;

 $coun = DB::table('popular_cities')->where('city_name', $city)->first();

$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('events')->where('status', '=', '1')
->where('city', '=', $coun->id)
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('events')->where('status', '=', '1')

->where('city', '=', $coun->id)
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
        $countr = DB::table('country')->where('id', $product->country)->first();
    
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><img src="'.url('public').'/'.$product->logo.'" data-src="public/'.$product->logo.'" class="uk-responsive uk-img" alt="public/'.$product->logo.'" ></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><img src="public/'.$product->logo.'" target="_self">'.$product->title.'</a></span>
                            </div>
                            <div class="dates"><span uk-icon="calendar"></span>'.date('d-M-Y', strtotime($product->start_date)).'</div>
                            <div class="venue">
                               <span uk-icon="icon: location"></span>  <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" title="'.$product->venue.'">'.$product->venue.'</a>
                            </div>
                        </div>
                        <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE EVENTS</span>
            </button>
        </div>';
}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO EVENTS</span>
            </button>
        </div>
       ';
      }
      echo $output;
}


 public function cat_events(Request $request)
{
    
$country= $request->country;
$count = DB::table('country')->where('countryname', $country)->first();

$cat= $request->cat;


$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('events')->where('status', '=', '1')
->where('category', '=', $cat)
->where('country', '=', $count->id)
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('events')->where('status', '=', '1')

->where('category', '=', $cat)
->where('country', '=', $count->id)
->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
        $countr = DB::table('country')->where('id', $product->country)->first();
        
        
$id = $product->id;
$created_at=$product->created_at; 
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-2 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag"></div>
                            <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self">
                            <img src="'.url('public').'/'.$product->logo.'" data-src="public/'.$product->logo.'" class="uk-responsive" alt="" uk-img>
                            </a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self">'.$product->title.'</a></span>
                            </div>
                            <div class="dates"><span uk-icon="calendar"></span>'.date('d-M-Y', strtotime($product->start_date)).'</div>
                            <div class="venue">
                               <span uk-icon="icon: location"></span>  <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" title="'.$product->venue.'">'.$product->venue.'</a>
                            </div>
                        </div>
                        <a href="'.url('event-details').'/'.str_replace(' ','_', $countr->countryname).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE EVENTS</span>
            </button>
        </div>';
}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO EVENTS</span>
            </button>
        </div>
       ';
      }
      echo $output;
}


	public function news()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
         $web_banner = DB::table('single_page')->first();
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries,'web_banner'=>$web_banner];
return view('news')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    
    
     public function all_news(Request $request)
{
    

    

$output = '';

      if($request->id > 0)
      {
$id = $request->id;
$news = DB::table('news')->where('status', '=', '1')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$news = DB::table('news')->where('status', '=', '1')
->orderBy('id', 'desc')->paginate(6);
      }



if(!$news->isEmpty())
{
foreach($news as $product)
{
    
$id = $product->id;
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('news-details').'/'.str_replace(' ','_', $product->country).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><img src="'.url('public').'/'.$product->image.'" data-src="public/'.$product->image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('news-details').'/'.str_replace(' ','_', $product->country).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self" style="font-size: xx-large;">'.$product->title.'</a></span>
                            </div>
                            <div class="venue">
                               <span uk-icon="icon: location"></span>  <a href="'.url('news-details').'/'.str_replace(' ','_', $product->country).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" title="'.$product->country.'">'.$product->country.'</a>
                            </div>
                        </div>
                        <a href="'.url('news-details').'/'.str_replace(' ','_', $product->country).'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row2">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more2" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE NEWS</span>
            </button>
        </div>';

}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO NEWS</span>
            </button>
        </div>
       ';
      }
      echo $output;
}







	public function nri_info()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
         $web_banner = DB::table('single_page')->first();
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries,'web_banner'=>$web_banner];
return view('nri_info')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    
    
     public function all_info(Request $request)
{
    

    

$output = '';

      if($request->id > 0)
      {
$id = $request->id;
$nri_info = DB::table('nri_info')->where('status', '=', '1')

->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$nri_info = DB::table('nri_info')->where('status', '=', '1')

->orderBy('id', 'desc')->paginate(6);
      }



if(!$nri_info->isEmpty())
{
foreach($nri_info as $product)
{
    
        if($product->type == '0'){
            
            $id = $product->id;
$linkurl = url($product->name);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('nri_info-details').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" target="_self"><img src="'.url('public').'/'.$product->banner_image.'" data-src="public/'.$product->banner_image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('nri_info-details').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" target="_self" style="font-size: xx-large;">'.$product->name.'</a></span>
                            </div>
                   
                        </div>
                        <a href="'.url('nri_info-details').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
        
    }elseif($product->type == '2'){
        
        
        $id = $product->id;
$linkurl = url($product->name);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('Know-India-Facts-Info').'/'.str_replace(' ','_', $product->name).'" target="_self"><img src="'.url('public').'/'.$product->banner_image.'" data-src="public/'.$product->banner_image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('Know-India-Facts-Info').'/'.str_replace(' ','_', $product->name).'" target="_self" style="font-size: xx-large;">'.$product->name.'</a></span>
                            </div>
                   
                        </div>
                        <a href="'.url('Know-India-Facts-Info').'/'.str_replace(' ','_', $product->name).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
    }

elseif($product->type == '3'){
        
        
        $id = $product->id;
$linkurl = url($product->name);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('Know-India-Facts-Info').'/Tourism/'.str_replace(' ','_', $product->title1).'/'.str_replace(' ','_', $product->title2).'/'.str_replace(' ','_', $product->title3).'" target="_self"><img src="'.url('public').'/'.$product->banner_image.'" data-src="public/'.$product->banner_image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('Know-India-Facts-Info').'/Tourism/'.str_replace(' ','_', $product->title1).'/'.str_replace(' ','_', $product->title2).'/'.str_replace(' ','_', $product->title3).'" target="_self" style="font-size: xx-large;">'.$product->name.'</a></span>
                            </div>
                   
                        </div>
                        <a href="'.url('Know-India-Facts-Info').'/Tourism/'.str_replace(' ','_', $product->title1).'/'.str_replace(' ','_', $product->title2).'/'.str_replace(' ','_', $product->title3).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
    }
    elseif($product->type == '4'){
        
        
        $id = $product->id;
$linkurl = url($product->name);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('NRI-Events').'/NRI-Indian-Associations/'.str_replace(' ','_', $product->name).'" target="_self"><img src="'.url('public').'/'.$product->banner_image.'" data-src="public/'.$product->banner_image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('NRI-Events').'/NRI-Indian-Associations/'.str_replace(' ','_', $product->name).'" target="_self" style="font-size: xx-large;">'.$product->name.'</a></span>
                            </div>
                   
                        </div>
                        <a href="'.url('NRI-Events').'/NRI-Indian-Associations/'.str_replace(' ','_', $product->name).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
    }
    


}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row4">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more4" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE INFO</span>
            </button>
        </div>';

}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO INFO</span>
            </button>
        </div>
       ';
      }
      echo $output;
}



  public function all_info1(Request $request)
{
    

    

$output = '';

      if($request->id > 0)
      {
$id = $request->id;
$nri_info = DB::table('nri_info')->where('status', '=', '1')
->where('type', '=', '1')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$nri_info = DB::table('nri_info')->where('status', '=', '1')
->where('type', '=', '1')
->orderBy('id', 'desc')->paginate(6);
      }



if(!$nri_info->isEmpty())
{
foreach($nri_info as $product)
{
    
$id = $product->id;
$linkurl = url($product->name);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('nri_info-details').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" target="_self"><img src="'.url('public').'/'.$product->banner_image.'" data-src="public/'.$product->banner_image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('nri_info-details').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" target="_self" style="font-size: xx-large;">'.$product->name.'</a></span>
                            </div>
                   
                        </div>
                        <a href="'.url('nri_info-details').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row5">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more5" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE Entertainment</span>
            </button>
        </div>';

}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO Entertainment</span>
            </button>
        </div>
       ';
      }
      echo $output;
}





      public function nri_info_details($id)
    {
       

            $banners = Nri_info::where('id', $id)->first(); 
$cat = Cat::orderBy('id', 'asc')->paginate(11);
$popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
$countries = Country::latest()->paginate(10);
$data = ['banners'  =>$banners,'cat'   => $cat,'popular_cities' => $popular_cities,'countries'=>$countries];
return view('nri_info_details')->with($data, (request()->input('page', 1) - 1) * 8);
    }




public function jobs()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
         $web_banner = DB::table('single_page')->first();
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries,'web_banner'=>$web_banner];
return view('jobs')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    
    
    public function popular_events()
    {
        $events = Events::latest()->paginate(8);
$cat = Cat::orderBy('id', 'asc')->paginate(11);
         $popular_cities = Popular_cities::orderBy('id', 'asc')->paginate(11);
         $countries = Country::latest()->paginate(10);
         $web_banner = DB::table('single_page')->first();
$data = ['events'  =>$events,'cat'   => $cat, 'popular_cities' => $popular_cities,'countries'=>$countries,'web_banner'=>$web_banner];
return view('popular_events')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    
    
     public function all_jobs(Request $request)
{
    

    

$output = '';

      if($request->id > 0)
      {
$id = $request->id;
$jobs = DB::table('jobs')->where('status', '=', '1')
->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$jobs = DB::table('jobs')->where('status', '=', '1')
->orderBy('id', 'desc')->paginate(6);
      }



if(!$jobs->isEmpty())
{
foreach($jobs as $product)
{
    
$id = $product->id;
$linkurl = url($product->title);
$output .= '                <div class="uk-width-1-1 uk-width-1-3@m uk-width-1-3@l is-item job-instructor-layout">
                    <div class="uk-card uk-card-default uk-card-small uk-margin-bottom event-cover">
                        <div class="image uk-text-center">
                            <div class="tag "></div>
                            <a href="'.url('jobs-details').'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self"><img src="'.url('public').'/'.$product->image.'" data-src="public/'.$product->image.'" class="uk-responsive" alt="" uk-img></a>
                        </div>

                        <div class="uk-card-body">
                            <div class="title">
                                <span><a href="'.url('jobs-details').'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self" style="font-size: xx-large;">'.$product->title.'</a></span>
                            </div>
                           <div class="venue">
                                <span ><a href="'.url('jobs-details').'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" target="_self" >'.substr($product->description,0,20).'</a></span>
                            </div>
                        </div>
                        <a href="'.url('jobs-details').'/'.$product->id.'/'.str_replace(' ','_', $product->title).'" class="uk-button uk-width-1-1 btn-orange"><span uk-icon="icon:  triangle-right"></span>More Details</a>
                    </div>
                </div>';
                $last_id = $product->id;
}
$output .= '<div class="uk-bottom uk-padding-small" id="remove-row3">
            <button class="uk-button btn-black view-more-button"  style="color:#fff;" id="btn-more3" data-id="'.$last_id.'">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">MORE JOBS</span>
            </button>
        </div>';

}
else
      {
       $output .= '
       <div class="uk-bottom uk-padding-small" >
            <button class="uk-button btn-black view-more-button"  style="color:#fff;">
                <span uk-icon="icon: chevron-right" class="uk-icon"></span> <span class="uk-margin-small-right">NO JOBS</span>
            </button>
        </div>
       ';
      }
      echo $output;
}





 
 public function get_flag(request $request)
    {
        

        
       $query=$request->input('query');
            
             $data = DB::table('country')->where('countryname', $query)->first();
$flag=$data->countryflag;
return response()->json(['flag'=>url('/').'/'.$flag]);

}


public function ip()
    {
        

$ipAddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])){
            $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if(isset($_SERVER['REMOTE_ADDR'])){
            $ipAddress = $_SERVER['REMOTE_ADDR'];
        }else{
            $ipAddress = 'UnKnown';
        }
   

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://ip-api.com/json/".$ipAddress,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_TIMEOUT => 30000,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    	// Set Here Your Requesred Headers
        'Content-Type: application/json',
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    
} else {
   $res= json_decode($response);
    
$country= $res->country;
$city= $res->city;
echo "<script>alert('".$country."')</script>";
echo "<script>alert('".$city."')</script>";

 $coun = DB::table('country')->where('countryname', $country)->first();
}

        
    }  
    
    

 
 public function country_session(request $request)
    {
        

        
       $country=$request->input('country');
            
       Session::put('country', $country);

return response()->json(['country'=>$country]);

}


 
 public function search_city(request $request)
    {
        

        
       $country=$request->input('country');
           $cd = DB::table('country')
        ->where('countryname', '=', $country)
        ->first();
       
      $data = DB::table('popular_cities')
        ->where('country_id', '=', $cd->id)
        ->get();
        $output1 = '';
      $output = '';

      foreach($data as $row)
      {
      // $output .= '<li data-value="'.$row->city_name.'" class="option selected focus">'.$row->city_name.'</li>';
        $output .= '<option value="'.$row->city_name.'">'.$row->city_name.'</li>';
      }
      
      
      foreach($data as $row)
      {
        $output1 .= '<li><a href="'.url("city-events/")."/".str_replace(' ','_', $row->city_name).'">'.$row->city_name.'</a></li>';
      }
      

      $countries = Country::latest()->paginate(200);
      
      
      
    return response()->json(['countries'=>$countries,'output'=>$output,'output1'=>$output1]);

       
       
            


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

	public function property_add()
    {
		        $user = auth()->guard('admin')->user();
  if ($user)
{
$data = ['user' => $user];
   return view('Admin.property-add', $data);
     
}

    }

 public function submit_property(Request $request)
    {
		
         		        $user = auth()->guard('admin')->user();
  if ($user)
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
		
	







$input['posted_by']=auth()->guard('admin')->user()->id;
       
        Property::create($input);

     
    }





      
   
}
    	public function destroy($id){
   
    Events::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Event deleted successfully!'
    ]);
}

	
			public function admin_login()
    {
 
          return view('Admin.admin-login');
    }
	
	##Ravali
	public function service_destroys($id){
	    $user = auth()->guard('admin')->user();
  if ($user)
{
   
    sales::find($id)->delete($id);
	
  
    return response()->json([
        'success' => 'Slideshow deleted successfully!'
    ]);
}
}
public function service_status(Request $request)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $user = sales::find($request->id);
       // $user->status = $request->status;
        if($request->status == '0'){
            $user->status= 1;
        }else{
             $user->status= 0;
        }
        
        $user->save();
  
        return response()->json(['success'=>$user->status]);
    }
    }
	public function destroys($id){
	    $user = auth()->guard('admin')->user();
  if ($user)
{
   
    blog::find($id)->delete($id);
	
  
    return response()->json([
        'success' => 'Slideshow deleted successfully!'
    ]);
}
}
	public function status(Request $request)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $user = blog::find($request->id);
        
       // $user->status = $request->status;
        if($request->status == '0'){
            $user->status= 1;
        }else{
             $user->status= 0;
        }
        
        $user->save();
  
        return response()->json(['success'=>$user->status]);
    }
    }
    
    public function add_blog()
    {
	
 $user = auth()->guard('admin')->user();
  if ($user)
{
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog, 'user' =>$user];
return view('Admin.add-blog')->with($data, (request()->input('page', 1) - 1) * 8);
}

    } 
	public function edit($id)
    {
                       

        $user = auth()->guard('admin')->user();
  if ($user)
{
    $blog = blog::where('id', $id)->first();

$data = ['blog'  =>$blog, 'user' =>$user];
return view('Admin.blog-edit')->with($data, (request()->input('page', 1) - 1) * 8);
}  
     

    }
	
	
	public function blog_submit(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'title' => 'required',
        ]);
		

        if ($validator->passes()) {




$input['logo9'] = 'uploads/'.time().'.'.$request->logo->extension();  

$input['logo'] = 'uploads'.'/'.time().'.'.$request->logo->extension();  

$request->logo->move('uploads', $input['logo9']);
$input['name'] = $request->name;
$input['title'] = $request->title;
$input['description'] = $request->description;
$input['status'] = 1;
$blog = blog::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
	
	public function sales_submit(Request $request)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
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
    }
    public function interior_service_submit(Request $request)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{


    
	

    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'enterprise_name' => 'required',
			 'phone' => 'required',
			 'mail' => 'required',
			 
			 'logo' => 'required',
			 'address' => 'required',
			 'service' => '',
			 'year' => 'required',
			 'websitelink' => 'required',
        ]);



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

$input['logo'] = $request->logo;
$input['address'] = $request->address;

$input['service'] = $request->service;
$input['year'] = $request->year;
$input['websitelink'] = $request->websitelink;
$input['status'] = 1;

$interior_service = Interior_service::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
    }
    public function furniture_submit(Request $request)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{

if($request->options == 'sales'){
    
	

    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'enterprise_name' => 'required',
			 'phone' => 'required',
			 'mail' => 'required',
			 'licence_document' => 'required',
			 'chart_price' => 'required',
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
			 'chart_price' => 'required',
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
	$input['chart_price'] = $request->chart_price;
	$input['branch'] = $request->branch;	
}
else if($request->options == 'repair'){
	$input['chart_price'] = $request->chart_price;
	$input['service'] = $request->service;
	
}
$sales = sales::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
    }

	
	
	
	
	
	public function blog_table()
    {         		        $user = auth()->guard('admin')->user();
  if ($user)
{
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog, 'user' =>$user];
return view('Admin.blog-table')->with($data, (request()->input('page', 1) - 1) * 8);
}
    }
	public function electrical_table()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $sales = sales::latest()->paginate(8);

$data = ['sales'  =>$sales];
return view('Admin.electrical-table')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    }
	public function electrical_edit($id)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
                       
    $sales = sales::where('id', $id)->first();

   return view('Admin.electrical-edit', ['sales' => $sales]);
         
}


    }
    public function interior_service()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        
return view('Admin.interior-service');

    }
    }
    public function interior_service_table()
    {
        echo 'hi';
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $interior_service = Interior_service::latest()->paginate(8);

$data = ['interior_service'  =>$interior_service];
return view('Admin.interior-service-table')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    }
	public function interior_service_edit($id)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
                       
    $interior_service = interior_service::where('id', $id)->first();

   return view('Admin.interior-service-edit', ['interior_service' => $interior_service]);
         
}
}
    public function furniture_table()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $sales = sales::latest()->paginate(8);

$data = ['sales'  =>$sales];
return view('Admin.furniture-table')->with($data, (request()->input('page', 1) - 1) * 8);

    }
    }
	public function furniture_edit($id)
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
                       
    $sales = sales::where('id', $id)->first();

   return view('Admin.furniture-edit', ['sales' => $sales]);
         
}

    }
    public function furniture()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        
return view('Admin.furniture');

    }
    }
	public function services()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        
return view('Admin.services');

    }
    }
	public function electrical()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        
return view('Admin.electrical');

    }
    }
    public function farmland_slides()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
        $farmlandslides = Farmlandslides::latest()->paginate(8);

$data = ['farmlandslides'  =>$farmlandslides];
return view('Admin.farmland-slides')->with($data, (request()->input('page', 1) - 1) * 8);

 
}
    }
    public function farmland_add_slides()
    {
        $user = auth()->guard('admin')->user();
  if ($user)
{
 
          return view('Admin.farmland-add-slides');
    }
    }
    public function farmland_slide_submit(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            
             'title' => 'required',
             'logo' => 'required',
        ]);
		

        if ($validator->passes()) {




if($request->hasFile('logo'))
{
$file = $request->logo;
$extension = $file->getClientOriginalExtension();
        $input['logo'] = 'uploads/'.time().'.'.$request->logo->extension();  
        $request->logo->move(public_path('uploads'), $input['logo']);

}

$input['title'] = $request->title;

$input['status'] = 1;
$farmlandslides = farmlandslides::create($input);

			return response()->json(['success'=>'1']);
        }


	      return Response::json(['errors' => $validator->errors()]);

    }
    ##endRavali
    
    ////addbuillderform start//////

	public function addbuillderform()
    {
		        $user = auth()->guard('admin')->user();
  if ($user)
{
$data = ['user' => $user];
   return view('Admin.addbuillderform', $data);
     
}

    }
    

    public function addbuillder_form(Request $request)
    {

     
    	$validator = Validator::make($request->all(), [
             'name' => 'required',
             'phone' =>  'required|numeric|digits:10',
             'email' => 'required|email',
             'construction_name' => 'required',
             'project_name' => 'required',
             'address' => 'required',
             'country' => 'required',
             'state' => 'required',
             'city' => 'required',
             'area' => 'required',
             'pincode' =>  'required|numeric|digits:6',
             'about' => 'required',
             'about_project' => 'required',
             'project_type' => 'required',
             'brochure' => 'required|mimes:pdf',
              'layout' => 'required|mimes:pdf',
               'location' => 'required',
                'property_images' => 'required',
             'possession_date' => 'required',
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();

/* $input['property_images'] = 'uploads'.'/'.time().'.'.$request->property_images->extension();  
$request->property_images->move('uploads', $input['property_images']);*/ 

$image_code = '';
    $images = $request->file('property_images');
    foreach($images as $image)
    {
     $new_name = rand() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('uploads'), $new_name);
     $iii[]=$new_name;
    }

$input['property_images']=implode(",",$iii);


          $input['status']=1; 

$input['brochure'] = 'uploads'.'/'.time().'.'.$request->brochure->extension();  
$request->brochure->move('uploads', $input['brochure']);

$input['layout'] = 'uploads'.'/'.time().'.'.$request->layout->extension();  
$request->layout->move('uploads', $input['layout']); 
addbuillderform::create($input);
   
   
      
$errorMSG = "";


if(empty($errorMSG)){
	         
	       $phone = $request->phone;       
          $rrr=urlencode('Hello '.$request->name.' Thank you for addbuillder');
			$this->sendSMS($rrr,$phone);  
	         
	$to = 'krishnareddyk@yahoo.com';
	
		//$to='contact@inspiredinfotech.com';
$subject = $_POST['name'].' contact to you';
$from = 'connect@CyberabadRealty.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<h2 style="text-align:center;">addbuillder datails </h2><br><table style="font-family: verdana, arial, sans-serif; font-size: 11px; color: #333333; border-width: 1px; border-color: #3A3A3A; border-collapse: collapse;">
  <thead>
  <tr style="">
    <th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Name</th>
    <th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Email</th>
    	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Mobile no</th>

  </tr>
  </thead>
  <tbody>
  <tr style="">
    <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['name'].'</td>
    <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['email'].'</td>
        <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['phone'].'</td>

  </tr>
</tbody>  
</table>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
       
 
} else{
   // echo 'Unable to send email. Please try again.';
   echo json_encode(array('success'=>false,'text'=>'bye'));
}


	
	$to = $request->email;
	
		//$to='contact@inspiredinfotech.com';
$subject = 'Hello '.$_POST['name'].' Thank you for addbuillder';
$from = 'connect@CyberabadRealty.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message1 = 'Hello '.$_POST['name'].' Thank you for addbuillder';
 
// Sending email
if(mail($to, $subject, $message1, $headers)){
         return response()->json(['error'=>'0']);
} else{
   // echo 'Unable to send email. Please try again.';
   echo json_encode(array('success'=>false,'text'=>'bye'));
}
          
        

}
           }
    	return response()->json(['error'=>$validator->errors()]);
    }
	
	
	
	//addbuillderform form end//
    public function sendSMS($message ,$mobile_no){






$url="http://173.45.76.227/send.aspx?username=ctrans&pass=demo123&route=Trans1&senderid=CREATV&numbers=$mobile_no&message=$message";


$ch=curl_init();

$timeout=30;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$responce = curl_exec($ch);
if($responce == true)
{
}
curl_close($ch);
}


/////////////////////////////////
	public function location_table()
    {
	 $user = auth()->guard('admin')->user();
  if ($user){
$data = ['user' => $user];
 $locations = Locations::all();
   return view('Admin.location-table', $data)
      ->with('locations',$locations); 
}
 
 
    } 

 public function add_location()
    {
	
 $user = auth()->guard('admin')->user();
  if ($user)
{
        $location = Locations::latest()->paginate(8);

$data = ['location'  =>$location, 'user' =>$user];
return view('Admin.add-location')->with($data, (request()->input('page', 1) - 1) * 8);
}

    } 


	public function location_submit(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'image' => 'required',
        ]);
		
        if ($validator->passes()) {
$input['image'] = 'uploads'.'/'.time().'.'.$request->image->extension();  

$request->image->move('uploads', $input['image']);
$input['name'] = $request->name;
$input['status'] = 1;
$blog = Locations::create($input);
			return response()->json(['success'=>'1']);
        }
	      return Response::json(['errors' => $validator->errors()]);
    }
	
	public function destroyd($id){
   
    locations::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}
	
	
	
	

}