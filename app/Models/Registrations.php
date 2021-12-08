<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    protected $fillable = ['name','lastname','email','password'];
    protected $table = "users";
    use HasFactory;
}
