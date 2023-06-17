<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getStatus(){
        $status=$this->status;
        switch($status){
            case 0:
                return "applied";
                break;
            case 1:
                return "accepted";
                break;
            case 2:
                return "terminated";
                break;

        }
    }
}
