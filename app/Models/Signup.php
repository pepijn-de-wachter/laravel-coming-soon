<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = ['email', 'socialite_id', 'socialite_provider'];


}
