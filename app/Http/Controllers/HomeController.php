<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
public function Premium(){
$user_type=Auth::User()->user_type;
    if ($user_type==1){
        return view('backend.index');
    }
    elseif ($user_type==0) {
        return view('dashboard');
    }
}
    
}
