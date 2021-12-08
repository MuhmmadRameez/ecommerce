<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingDetails extends Model
{
    protected $fillable =['user_id','billing_address','person_name','contact'];
    protected $table = "user_billing_info";
    use HasFactory;
}
