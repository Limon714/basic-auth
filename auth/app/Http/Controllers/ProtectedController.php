<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProtectedController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function Secreat(Request $request){
        $user = Auth::user();
        $message = "This is a secreat message for {$user ->name}";
        return view('Secret', compact('message'));
    }
}
