<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Enquiry;
use App\Subscribe;
use App\Contact;
use App\Property;
use Illuminate\Support\Facades\Crypt;


use Mail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use App\Blog;
use App\Blogform;
use App\Sales;
use App\Slides;
use App\Farmlandslides;
use App\Advertise;
use App\Addbuillderform;
use App\Users;

class AuthController extends Controller
{
 
 public function index()
    {
        

        return view('login');
    
        
    }  
    
     public function faq()
    {
        

        return view('faq');
    
        
    } 
       public function Realestate_news()
    {
        

        return view('Realestate_news');
    
        
    } 

    public function legaldocuments()
    {
        

        return view('legaldocuments');
    
        
    }  
    public function saleagreement()
    {
        

        return view('saleagreement');
    
        
    }  
    public function surrenderdeed()
    {
        

        return view('surrenderdeed');
    
        
    }  
    public function mortagedeed()
    {
        

        return view('mortagedeed');
    
        
    } 
     public function Transferdeed()
    {
        

        return view('Transferdeed');
    
        
    }
     public function apstampduty()
    {
        

        return view('apstampduty');
    
        
    }
     public function powerofattorney()
    {
        

        return view('powerofattorney');
    
        
    }
    public function indemnity()
    {
        

        return view('indemnity');
    
        
    }
    public function giftdeed()
    {
        

        return view('giftdeed');
    
        
    }
    public function leasedeed()
    {
        

        return view('leasedeed');
    
        
    }
    public function releasedeed()
    {
        

        return view('releasedeed');
    
        
    }
     public function certificate() 
    {
        

        return view('certificate');
    
        
    }
    
     public function homefinance()
    {
        

        return view('homefinance');
    
        
    }  
     public function insurancecompanies()
    {
        

        return view('insurancecompanies');
    
        
    }  
     public function  homeloans()
    {
        

        return view(' homeloans');
    
        
    }
     public function  homeinsurance()
    {
        

        return view(' homeinsurance');
    
        
    }
     public function  documentsforloan()
    {
        

        return view(' documentsforloan');
    
        
    }
    public function advertise()
    {
        

        return view('advertise');
    
        
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
    
    
    public function salesdeed()
    {
        

        return view('salesdeed');
    
        
    }  
    public function governmentbodies()
    {
        

        return view(' governmentbodies');
    
        
    }  
    
      public function vastu()
    {
        

        return view(' vastu');
    
        
    } 
    public function indianvastushastra() 
    {
        

        return view('indianvastushastra');
    
        
    }
     
      public function vastuasscience(){
        

        return view('vastuasscience');
    
        
    } 
    
    
    public function originofvastu() 
    {
        

        return view('originofvastu');
    
        
    }
    
    
    
    
    
     public function vastutips() 
    {
        

        return view('vastutips');
    
        
    }
     public function whyvastu() 
    {
        

        return view('whyvastu');
    
        
    }
     public function vastuebook() 
    {
        

        return view('vastuebook');
    
        
    }
     public function vastuforhome() 
    {
        

        return view('vastuforhome');
    
        
    }
     public function vastuforbedroom() 
    {
        

        return view('vastuforbedroom');
    
        
    }
     public function vastuforbathroom() 
    {
        

        return view('vastuforbathroom');
    
        
    }
     public function vastufordiningroom() 
    {
        

        return view('vastufordiningroom');
    
        
    }
     public function vastuforchildrenroom() 
    {
        

        return view('vastuforchildrenroom');
    
        
    }
     public function vastufordrawingroom() 
    {
        

        return view('vastufordrawingroom');
    
        
    }
    
    public function vastuforcommercialbuildings() 
    {
        

        return view('vastuforcommercialbuildings');
    
        
    }
    public function vastuforindustry() 
    {
        

        return view('vastuforindustry');
    
        
    }
    
    public function vastuforoffices() 
    {
        

        return view('vastuforoffices');
    
        
    }
    
    public function vastuforshops() 
    {
        

        return view('vastuforshops');
    
        
    }
    
    public function vastuforplotselection() 
    {
        

        return view('vastufordrawingroom');
    
        
    }
    
    public function vastuforhotels() 
    {
        

        return view('vastuforhotels');
    
        
    }
    public function vastuforhospitals() 
    {
        

        return view('vastuforhospitals');
    
        
    }
    public function vastuforkitchen() 
    {
        

        return view('vastuforkitchen');
    
        
    }
    
    
    
    
     public function formproperties()
    {
        
          $farmlandslides =farmlandslides::where('status', 1)->paginate(500);

		
		$data = ['farmlandslides'  =>$farmlandslides];
		return view('formproperties')->with($data, (request()->input('page', 1) - 1) * 8);
        
    
    } 
    
	public function header()
    {
        
          
        return view('header');
    
    }  
	public function about()
    {
        
          
        return view('about');
    
    }  
	public function register()
    {
        
			
        return view('register');
    
    }  
	public function addproperty()
    {
        
          
        return view('addproperty');
    
    } 
	public function blog()
    {
        
        $blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('blog')->with($data, (request()->input('page', 1) - 1) * 8);
        return view('blog');
    
    } 
    
    
    
    
    public function builder_details($id)
    {
        
        
        $users = users::where('id', $id)->first(); 
        $addbuillderform = Addbuillderform::where('id', $id)->first(); 

$data = ['addbuillderform'  =>$addbuillderform,'users'  =>$users];
return view('builder-details')->with($data, (request()->input('page', 1) - 1) * 8);

        
    
    } 
    
    
    
    
    public function services_single_list()
    {
        
        $sales = sales::latest()->paginate(8);

$data = ['sales'  =>$sales];
return view('services-single-list')->with($data, (request()->input('page', 1) - 1) * 8);
        return view('blog');
    
    } 
	public function categories()
    {
        
          
        return view('categories');
    
    } 
	public function propertydetails()
    {
        
          
        return view('propertydetails');
    
    } 
	public function single_list()
    {
        
          
        return view('single-list');
    
    } 
    public function services_details_show()
    {
        
          
        return view('services-details');
    
    } 
    public function services_details(Request $request)
{
  
$output = '';

 if($request->id > 0)
      {
$id = $request->id;
$events = DB::table('sales')->where('status', '=', '1')

->where('id', '<', $id)
->orderBy('id', 'desc')->paginate(6);
      }
      else
      {
$events = DB::table('sales')->where('status', '=', '1')

->orderBy('id', 'desc')->paginate(6);
      }
      


if(!$events->isEmpty())
{
foreach($events as $product)
{
    
    
$id = $product->id;
$created_at=$product->created_at; 
// $linkurl = url($product->bedrooms);
// if($product->property_for =='1'){
// 	$type='REPAIR';
// }else{
// 	$type='SALE';
// }

$output .= '<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" style="background:url('.url('').'/public/uploads'.$product->logo.');background-repeat: no-repeat; background-size: cover; background-position: top center;">
						
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>'.$product->exp.'</h5>
								<p><i class="fa fa-map-marker"></i>'.$product->phone.'</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> '.$product->mail.' Square feets</p>
										<p><i class="fa fa-bed"></i> '.$product->exp.' Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> '.$product->address.' Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> '.$product->branch.'</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="'.url('services-single-list').'/'.$product->id.'/'.str_replace(' ','_', $product->name).'" class="room-price">$'.$product->exp.'</a>
						</div>
					</div>
				</div>
				
				
				
				';
                $last_id = $product->id;
}
$output .= '
			<div class="container">

		  <div class="row" id="remove-row20">
    <div class="col text-center">
      <button class="btn btn-default" style="background: #30caa0; color:white;" id="btn-more20" data-id="'.$last_id.'">Load More</button>
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
	public function footer()
    {
        
          
        return view('footer');
    
    }
	public function thankyou()
    {
        
          
        return view('Thankyou');
    
    }
	public function error_page()
    {
        
          
        return view('404');
    
    }
    
    
	

    
    public function home()
    {
       
       // $slides = DB::select('select * from slides')->where('status', 1);
	$slides =slides::where('status', 1)->paginate(500);
	$users = users::latest()->paginate(8);
	$blog = blog::latest()->paginate(8);

		$sales =sales::where('status', 1)->paginate(500);
		$data = ['sales'  =>$sales, 'slides'  =>$slides, 'users'  =>$users, 'blog' =>$blog];
		return view('index')->with($data, (request()->input('page', 1) - 1) * 8);
        
                                  
    }
    public function privacy_policy()
    {
        
          
        return view('privacy-policy');
    
    } 
	public function terms_conditions()
    {
        
          
        return view('terms-conditions');
    
    } 
	
// 	public function blog()
//     {
        
//         $blog =blog::where('status', 1)->paginate(500);

// $data = ['blog'  =>$blog];
// return view('blog')->with($data, (request()->input('page', 1) - 1) * 8);
//         return view('blog');
    
//     } 
	public function blogdetails()
    {
       

            
            
           // $event_mobile=User::where('id',$event_created_by->create_by)->first(); 
            //$event_email=User::where('id',$event_created_by->create_by)->first(); 
$blog = blog::latest()->paginate(8);

$data = ['blog'  =>$blog];
return view('blog-details')->with($data, (request()->input('page', 1) - 1) * 8);
    }
	
	public function blogcontact_submit(Request $request)
    {



    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'email' => 'required',
			 'message' => 'required'
        ]);



        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Blogform::create($input);
   $data = [
            'name' => $request->input('name'),
            'email'    => $request->input('email'),
            'message'=>$request->input('message'),
            

        ];
        
        
        Mail::send('emails.contact_data_blog', $data, function($message)  use ($data) {
        
        $blogform = DB::table('blogform')->where('id', 1)->first();
        $data['emails'] = $blogform->email;


        $message->to($data['emails'], 'nrievents')
        ->from('kmlalnehru9@gmail.com', 'nrievents')
        ->subject('Contact us - '.$data['name']);


        });
        
        if (Mail::failures()) {

        }else{
        } 
                                   
			return response()->json(['error'=>'1']);
        }


    	return response()->json(['error'=>$validator->errors()]);
    }
	
	public function subscribe(Request $request)
    {


    	$validator = Validator::make($request->all(), [
             'subscribe_email' => 'required|email'
        ]);


        if ($validator->passes()) {
            $user_count = Subscribe::where('subscribe_email', '=', $request->post('subscribe_email'))->count();
             $user = Subscribe::where('subscribe_email', '=', $request->post('subscribe_email'))->first();
            if($user_count > 0)
{
    if($user->status == '1'){
        
         return response()->json(['success'=>'Already you are our subscriber']);
    }else{
            date_default_timezone_set('Asia/Kolkata');
        DB::table('subscribe')
        ->where('subscribe_email', $request->post('subscribe_email'))  
        ->update(array('status' => 1,'updated_at' => date('Y-m-d H:i:s')));  
        
        
        




//START Mail with smtp in laravel
   $data = [

            'email'    => $request->post('subscribe_email'),
            'encrypted'    => Crypt::encryptString($request->post('subscribe_email')),

        ];

Mail::send('emails.subscribe_email', $data, function ($message) use ($data) {


$message->to($data['email'], 'subscribe');
$message->from('contact@travelsasaservice.com', 'cyberabad Realty');
$message->subject('Thank you for Subscribe');
});

if (Mail::failures()) {
}else{

}
        
        return response()->json(['success'=>'Thank you for Subscribe us']);
        
        
    }
    
    

}else{
    
    date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Subscribe::create($input);


//START Mail with smtp in laravel
   $data = [

            'email'    => $request->post('subscribe_email'),
            'encrypted'    => Crypt::encryptString($request->post('subscribe_email')),

        ];

Mail::send('emails.subscribe_email', $data, function ($message) use ($data) {


$message->to($data['email'], 'subscribe');
$message->from('contact@travelsasaservice.com', 'cyberabad Realty');
$message->subject('Thank you for Subscribe');
});

if (Mail::failures()) {
}else{

}
    	return response()->json(['success'=>'Thank you for Subscribe us']);
}


		
        }


    	return response()->json(['error'=>$validator->errors()->all()]);
    }
    
    	public function unsubscribe($email)
    {
$decrypted = Crypt::decryptString($email);

date_default_timezone_set('Asia/Kolkata');
        DB::table('subscribe')
        ->where('subscribe_email', $decrypted)  
        ->update(array('status' => 0,'updated_at' => date('Y-m-d H:i:s'))); 
         return view('thanks');
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


//contact form start //

/*
    public function contact_form(Request $request)
    {


    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
             'phone' => 'required|numeric|digits:10',
            'subject' => 'required',
            'message' => 'required',
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Contact::create($input);
 


$errorMSG = "";


if(empty($errorMSG)){
	         
	       $phone = $request->phone;       
          $rrr=urlencode('Hello '.$request->name.' Thank you for contact us');
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
$message = '<h2 style="text-align:center;">Contact datails </h2><br><table style="font-family: verdana, arial, sans-serif; font-size: 11px; color: #333333; border-width: 1px; border-color: #3A3A3A; border-collapse: collapse;">
  <thead>
  <tr style="">
    <th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Name</th>
    <th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Email</th>
    	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Mobile no</th>
	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Subject</th>
	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Message</th>
  </tr>
  </thead>
  <tbody>
  <tr style="">
    <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['name'].'</td>
    <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['email'].'</td>
        <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['phone'].'</td>
	<td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['subject'].'</td>
	<td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['message'].'</td>
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
$subject = 'Hello '.$_POST['name'].' Thank you for contact us';
$from = 'connect@CyberabadRealty.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message1 = 'Hello '.$_POST['name'].' Thank you for contact us';
 
// Sending email
if(mail($to, $subject, $message1, $headers)){
         return response()->json(['error'=>'1']);
} else{
   // echo 'Unable to send email. Please try again.';
   echo json_encode(array('success'=>false,'text'=>'bye'));
}
          
        

}

 //echo json_encode(array('success'=>false,'error'=>$errorMSG));
     

        }


    	return response()->json(['error'=>$validator->errors()]);
    }
	*/

	
	
	    public function contact_submit(Request $request)
    {


    	$validator = Validator::make($request->all(), [
            'name' => 'required',
             'email' => 'required|email',
            'phone' => 'required|digits:10',
            'subject' => 'required',
           
            'message' => 'required',
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Contact::create($input);
   $data = [
            'name' => $request->input('name'),
            'email'    => $request->input('email'),
            'message'=>$request->input('message'),
            'subject'=>$request->input('subject'),
            'phone'=>$request->input('phone')

        ];
        
         $phone = $request->phone;       
          $rrr=urlencode('Hello '.$request->name.' Thank you for contact us');
			$this->sendSMS($rrr,$phone);  
        
        Mail::send('emails.contact_data', $data, function($message)  use ($data) {
        
        $admin = DB::table('admins')->where('id', 1)->first();
        $data['emails'] = $admin->email;


        $message->to($data['emails'], 'Cyberabad-Realty')
        ->from('contact@CyberabadRealty.com', 'Cyberabad-Realty')
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
     


        $message->to($data1['email'], 'Cyberabad-Realty')
        ->from('contact@CyberabadRealty.com', 'Cyberabad-Realty')
        ->subject('Thank you for contacting us – we will get back to you soon!');


        });
        
        if (Mail::failures()) {

        }else{
            
        }  
                                   
			return response()->json(['error'=>'1']);
        }


    	return response()->json(['error'=>$validator->errors()]);
    }
    

////////////	// contact form end/////

	public function dummy()
    {
        
          
        return view('dummy');
    
    } 
    
    
    //add-property start//
    
  
	
    public function Property(Request $request)
    {

     
    	$validator = Validator::make($request->all(), [
             'name' => 'required',
             'email' => 'required|email',
             'mobile' => 'required',
             'PropertyLocation' => 'required',
             'PropertyType' => 'required',
             'PropertyPurpose' => 'required',
             'Agent' => 'required',
             'MinBeds' => 'required',
             'MinBathrooms' => 'required',
             'MinPrice' => 'required',
             'MaxPrice' => 'required',
             'MinArea' => 'required',
             'MaxArea' => 'required',
             'PropertyID' => 'required',
             'AdditionalDetails' => 'required',
           
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Property::create($input);
   
   

$errorMSG = "";


if(empty($errorMSG)){
	
	
	$to = 'krishnareddyk@yahoo.com';
	
		//$to='contact@inspiredinfotech.com';
$subject = $_POST['name'].' contact to you';
$from = 'connect@CyberabadRealty.com';
 $Cc="knarasimha615@gmail.com";
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
'Cc: '.$Cc."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<h2 style="text-align:center;">Contact datails </h2><br><table style="font-family: verdana, arial, sans-serif; font-size: 11px; color: #333333; border-width: 1px; border-color: #3A3A3A; border-collapse: collapse;">
  <thead>
  <tr style="">
    <th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Name</th>
    <th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Email</th>
    	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Mobile no</th>
	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Subject</th>
	<th style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #B2CFD8;">Message</th>
  </tr>
  </thead>
  <tbody>
  <tr style="">
    <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['name'].'</td>
    <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['email'].'</td>
        <td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['phone'].'</td>
	<td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['subject'].'</td>
	<td style="border-width: 1px; padding: 8px; border-style: solid; border-color: #517994; background-color: #ffffff;">'.$_POST['message'].'</td>
  </tr>
</tbody>  
</table>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
       
        return response()->json(['error'=>'1']);
} else{
   // echo 'Unable to send email. Please try again.';
   echo json_encode(array('success'=>false,'text'=>'bye'));
}



 //echo json_encode(array('success'=>false,'error'=>$errorMSG));
                           
			
        }
   
   
   
   
                          
			return response()->json(['error'=>'0']);
        }


    	return response()->json(['error'=>$validator->errors()]);
    }
	
    
    
     //add-property end//
     

// Enquiry form start//

 public function Enquiry(Request $request)
    {
        return view('Enquiry');
    }
	
    public function Enquiry_form(Request $request)
    {

     
    	$validator = Validator::make($request->all(), [
             'name' => 'required',
             'email' => 'required|email',
             'phone' =>  'required|numeric|digits:10',
             'PropertyLocation' => 'required',
             'PropertyType' => 'required',
             'PropertyPurpose' => 'required',
             'Agent' => 'required',
             'MinBeds' =>  'required|numeric',
             'MinBathrooms' =>  'required|numeric',
             'MinPrice' =>  'required|numeric',
             'MaxPrice' =>  'required|numeric',
             'MinArea' => 'required|numeric',
             'MaxArea' => 'required|numeric',
             'PropertyID' => 'required',
             'AdditionalDetails' => 'required',
           
        ]);


        if ($validator->passes()) {
date_default_timezone_set('Asia/Kolkata');
$input = $request->all();
Enquiry::create($input);
   
    	 
   
$errorMSG = "";


if(empty($errorMSG)){
	         
	       $phone = $request->phone;       
          $rrr=urlencode('Hello '.$request->name.' Thank you for Enquiry');
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
$message = '<h2 style="text-align:center;">Enquiry datails </h2><br><table style="font-family: verdana, arial, sans-serif; font-size: 11px; color: #333333; border-width: 1px; border-color: #3A3A3A; border-collapse: collapse;">
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
$subject = 'Hello '.$_POST['name'].' Thank you for Enquiry';
$from = 'connect@CyberabadRealty.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message1 = 'Hello '.$_POST['name'].' Thank you for Enquiry';
 
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
	
	
	//Enquiry form end//
	
	
	
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
	
}