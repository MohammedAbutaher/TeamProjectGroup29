<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListUserController extends Controller{

    function show(){

        $listuser = User::all();
        return view('userlist', ['users'=> $listuser]);
    }
}