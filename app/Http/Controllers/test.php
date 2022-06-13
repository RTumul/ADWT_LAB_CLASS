<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model\customer;
class test extends Controller
{
    //
    function testDB(){
        $users = customer::select('select * from customers');
        var_dump($users);
    }
}
