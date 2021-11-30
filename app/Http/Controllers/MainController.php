<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    //
    function index() {
        return view('join');
    }
    function index2() {
        return view('welcome');
    }
    function login(Request $request) {
        console("hiya!!");
        // $this->validate($request, [
        //     'username' => 'required|username',
        //     'password' => 'required'
        // ]);

        // $user_data = array( 
        //     'username' => $request->get('username'),
        //     'password' => $request->get('password')
        // );
        // if(Auth::attempt($user_data)) {
        //     console.log($user_data);
        // }
    }
}
