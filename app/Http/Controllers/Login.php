<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Hash;
class Login extends Controller
{
    public function index()
    {
        return view('front_end.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'   =>'required|email',
            'password'=>'required|min:6',
        ]);
        $email    = $request->email;
        $password = $request->password;

      $user = DB::table('users')->where('email','=',$request->email)->first();
      if ($user) 
      {

          if(Hash::check($password,$user->password))
          {
                  if (!empty($user))
                  {
                    
                    $request->session()->put('id', $user->id);
                    $request->session()->put('name', $user->name);
                    $request->session()->put('lastname', $user->lastname);
                    $request->session()->put('email', $user->email);
                    $request->session()->put('email_verify', $user->email_verify);
                    $request->session()->put('status', $user->status);
                    return redirect('dashboard');
                  }
          }
      }
      else
      {
        return back()->with('fail','Invalid username or password');
      }
    }

    public function dashboard()
    {
        if(Session::has('id')) 
        {
        return view('front_end.dashboard');
        }
        else
        {
            return redirect('sign-in');
        }
       
    }

    public static function user_info($user_id)
    {
        $user = DB::table('users')
        ->join('user_billing_info','user_billing_info.user_id','=','users.id')
        ->join('user_contact_infor','user_contact_infor.user_id','=','users.id')
        ->where('users.id',$user_id)->select('users.id','users.name','users.lastname','users.email','user_billing_info.billing_address',
            'user_billing_info.person_name','user_billing_info.contact','user_contact_infor.mobile','user_contact_infor.seconadary_mobile','user_contact_infor.address')->first();
        return $user;
    }

    public function logout()
    {
          Session::flush();
          Auth::logout();
          return redirect('sign-in');
    }
}
