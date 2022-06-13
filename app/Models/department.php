<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Http\Controllers\pageController;

class department extends Model
{
    use HasFactory;
     public function students(){
         return $this->hasMany(student::class, 'dept_id','id');
     }
}
