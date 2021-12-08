<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sellesrs;
use DB;
use Hash;
Use Session;
Use Mail;
class SellerRegistration extends Controller
{
    public  function index(){
        return view('front_end/seller_singup/seller_singup');
    }

    public function save_store(Request $request)
    {
        $request->validate([
            'store_name'=>'required|unique:tbl_store,store_name',
            'contact'   =>'required',
            'address'   =>'required',
            'email'     =>'required|email|unique:tbl_store,email',
            'password'  =>'required|min:6|max:12',
        ]);
      $fourRandomDigit = rand(1000,9999);  
      $seller = new Sellesrs();
      $seller->store_name = $request->store_name;  
      $seller->contact    = $request->contact;  
      $seller->address    = $request->address;  
      $seller->email      = $request->email;  
      $seller->password   = Hash::make($request->password);  
      $store = $seller->save();
      $store_id = DB::getPdo()->lastInsertId();
      if ($store) 
      {
          $data=[
            'subject'=>'Verification Email',
            'body'   =>'Your code is '.$fourRandomDigit,
            'email'  => $request->email,
            'code'   => $fourRandomDigit,
          ];
          Mail::send('front_end.seller_singup.confirmation_email', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->from('muhammadrameez135@gmail.com');
            $message->subject($data['subject']);
             });
          return redirect('store-dashboard/'.$store_id);
      }
    }
    public function seller_dashboard($id)
    {
        $id = $id;
        return view('front_end.seller_singup.store_dashboard',compact('id'));
    }

    public function login_seller()
    {
        
    }
}
