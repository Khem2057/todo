<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    public function index(){
        $user = \Auth::user();
        // dd($user);
        return view('myProfile', compact('user'));
    }
}
