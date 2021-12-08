<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrations;
use App\Models\VerificationCodes;
use DB;
use Hash;
use Session;
use Mail;
class Regsitration extends Controller
{
    public function save_user(Request $request)
    {
       $request->validate([
       
        'name'      => 'required|min:3',
        'lastname'  => 'required|min:3',
        'email'     => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:12',
       ]); 
       $registration = new Registrations();
       $registration->name        = $request->name;
       $registration->lastname    = $request->lastname;
       $registration->email       = $request->email;
       $registration->password    = Hash::make($request->password);
       $fourRandomDigit = rand(1000,9999);
       $account =  $registration->save();
       $user_id = DB::getPdo()->lastInsertId();
       if ($account) 
       {
           $verification_code = new VerificationCodes();   
           $verification_code->user_id  = $user_id;
           $verification_code->code = $fourRandomDigit ;
           $verification_code->sending_time=date('H:i:s'); 
          $code =  $verification_code->save(); 
          if ($code) 
          {
            $data = [
                'subject'=>'Welcome To Bachat Bazar',
                'message'=>'Your confirmation code is '.$fourRandomDigit,
                'email'  => $request->email,
                'code'   => $fourRandomDigit,
            ];
              Mail::send('front_end.email', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->from('muhammadrameez135@gmail.com');
            $message->subject($data['subject']);
             });
             return redirect('email-cofirmation/'.$user_id);
          }
       }
    }

    public function email_confirmation($id)
    {
        if ($id!=null) 
        {
            $select = DB::table('tbl_email_verification')->where('user_id',$id)->first();
            return view('front_end.email_verification',compact('id'));
        }
        else
        {
            return redirect('create-account');
        }
    }

    public function verify_email(Request $request)
    {
        $user_id  = $request->user_id;
        $code     = $request->code;
        $request->validate(
            [
                'code'=>'required|min:2',
            ]
        );
        $verify = DB::table('tbl_email_verification')->where('code','=',$code)->first();
        if ($verify) 
        {
            $update = DB::table('tbl_email_verification')->where('id', $user_id)->update(array('status' => 1));
            if ($update) 
            {
                $update_main_table = DB::table('users')->where('id',$user_id)->update(array('email_verify'=>1));
                if ($update_main_table) 
                {
                   return redirect('account-confirm');
                }
            }
        }
    }

    public function account_confirm()
    {
        return view('front_end.verification');
    }
}
