<?php
namespace App\Http\Controllers;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getAdminLogin()
    {
        
        if (auth()->guard('admin')->user()) return redirect()->route('admin.events_add');
        return view('adminLogin');
    }
    public function adminAuth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect()->route('admin.admin-panel');
        }else{
           return redirect()->back()->with('incorrect', 'Enter Correct Username and Password'); 

        }
    }
}