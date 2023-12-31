<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;
class Admin extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}
