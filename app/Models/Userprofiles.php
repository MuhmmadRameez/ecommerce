<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userprofiles extends Model
{
    protected $fillable = ['user_id','mobile','seconadary_mobile','address'];
    protected $table = "user_contact_infor";
    use HasFactory;
}
