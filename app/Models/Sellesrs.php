<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellesrs extends Model
{
    protected $fillable =['store_name','contact','address','email','password'];
    protected $table = "tbl_store";
    use HasFactory;
}
