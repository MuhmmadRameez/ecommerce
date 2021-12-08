<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationCodes extends Model
{
    protected $fillable = ['user_id','code','sending_time'];
    protected $table = "tbl_email_verification";
    use HasFactory;
}
