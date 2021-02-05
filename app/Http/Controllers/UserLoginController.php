<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use DB;
use Session;
use App\Users;
class UserLoginController extends Controller
{

    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest', ['except' => 'logout']);
    }
    public function getUserLogin()
    {
        return view('userLogin');
    }
    public function userAuth(Request $request)
    {

		$validator = Validator::make($request->all(), [
            'username' => 'required',
             'password' => 'required',
            
        ]);

        if ($validator->passes()) {

			
			        if (auth()->attempt(['email' => $request->input('username'), 'password' => $request->input('password')]))
			        {
            $user = auth()->user();
          

	
	 return response()->json(['success'=>'create-event']);
        }else{
         

			  return response()->json(['errors_wrong'=>'Username or Password are wrong.']);
        }



        }


    	return response()->json(['errors'=>$validator->errors()]);
		
		
    }
    
    
    
    private function getToken($length, $seed){    
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        mt_srand($seed);      // Call once. Good since $application_id is unique.

        for($i=0;$i<$length;$i++){
            $token .= $codeAlphabet[mt_rand(0,strlen($codeAlphabet)-1)];
        }
        return $token;
    }
	
	 public function sms_login(Request $request)
    {

		
		
		$validator = Validator::make($request->all(), [
            'mobile_no' => 'required|numeric|digits:10',
            
            
        ]);






        if ($validator->passes()) {
			
			
	
			
			
			
			
			
			
			
			
 if($request->mobile_no)
     {
      $mobile_no = $request->mobile_no;
      $data = DB::table("users")
       ->where('Mobileno', $mobile_no)
       ->count();
      if($data > 0)
      {
      	
		
		$token = rand(1000, 9999);
		       


	
$otp=$this->getToken(4, $token);
 $user = DB::table("users")->where('Mobileno', $mobile_no)->update(['otp' => $otp]);
		$this->sendSMS($otp,$mobile_no);
		$request->session()->put('otp', $otp);  
        $request->session()->put('phone_no', $mobile_no);  
			return response()->json(['error'=>'OTP has been sent','verify'=>'true']);

      }
      else
      {
       	
	 return response()->json(['error'=>'Please enter exist Mobile No']);
      }


        }


	
		
    }
	    	return response()->json(['errors'=>$validator->errors()]);

}


 public function otp_verify(Request $request)
    {

		
		$validator = Validator::make($request->all(), [
            'otp' => 'required',
            
            
        ]);


        if ($validator->passes()) {
			
 if($request->otp)
     {
         $otp = $request->otp;
		 $session_otp = $request->session()->get('otp');
			if($otp == $session_otp)
			{
				
				$user = Users::where('Mobileno', $request->session()->get('phone_no'))
  ->where('otp', $request->session()->get('otp'))
  ->first();
	
			  Auth::loginUsingId($user->id);
			 
			   if (!$user) {
				   					 return response()->json(['error'=>'OTP invalid']);

  }else{
	  					             Users::where('Mobileno','=',$request->session()->get('phone_no'))->update(['otp' => null]);

			 				return response()->json(['success'=>'create-event']);

			}



	
		
    }
	 return response()->json(['error'=>'OTP invalid']);
	 }

}
	    	return response()->json(['errors'=>$validator->errors()]);

	}


public function sendSMS($otp ,$mobile_no){

	
	


	
$url="http://173.45.76.227/send.aspx?username=ctrans&pass=demo123&route=Trans1&senderid=CREATV&numbers=$mobile_no&message=$otp";
	
	
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