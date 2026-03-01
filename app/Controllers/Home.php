<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    // public function login(){
    //     return view('1.html');
    // }
        public function login(){
        return view('login');
    }
}
