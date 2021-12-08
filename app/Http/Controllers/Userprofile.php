<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userprofiles;
use App\Models\BillingDetails;
class Userprofile extends Controller
{
    public function index($id)
    {
        $id= $id;
        return view('front_end.complete_profile',compact('id'));
    }

    public function save_information(Request $request)
    {
        $request->validate([
            'billing_address'   =>'required|min:5',
            'person_name'       =>'required|min:3',
            'contact'           =>'required|max:12',
            'mobile'            =>'required|max:12',
            'seconadary_mobile' =>'required|max:12',
            'seconadary_mobile' =>'required|max:12',
            'address'           =>'required|min:5',
        ]);
    $user_profile    = new Userprofiles();    
    $billing_details = new BillingDetails();    

    $user_profile->user_id           = $request->user_id;
    $user_profile->mobile            = $request->mobile;
    $user_profile->seconadary_mobile = $request->seconadary_mobile;
    $user_profile->address           = $request->address;
    $profile = $user_profile->save();
    if ($profile) 
    {
      $billing_details = new BillingDetails();
      $billing_details->user_id         = $request->user_id;  
      $billing_details->billing_address = $request->billing_address;  
      $billing_details->person_name     = $request->person_name;  
      $billing_details->contact         = $request->contact; 
      $billing_detail = $billing_details->save(); 
      if ($billing_detail) 
      {
        return back()->with('success','Your profile has been completed');
      }
      else
      {
        return back()->with('fail','oops something wrong');
      }
    }

    }

}
