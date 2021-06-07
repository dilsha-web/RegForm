<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class RegForm extends Model
{
    use HasFactory;
    public $fillable = [
        'username',
        'email', 
        'password' 
    ];
}
