<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CooladminController extends Controller
{


    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        return view('index2');
    }

    public function index3()
    {
        return view('index3');
    }

    public function index4()
    {
        return view('index4');
    }

    public function inbox()
    {
        return view('inbox');
    }

    public function chart()
    {
        return view('chart');
    }

    public function table()
    {
        return view('table');
    }

    public function form()
    {
        return view('form');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function map()
    {
        return view('map');
    }

    public function login()
    {
        return view('login');
    }


    public function register()
    {
        return view('register');
    }

    public function forgetpass()
    {
        return view('forget-pass');
    }

    public function button()
    {
        return view('button');
    }

    public function badge()
    {
        return view('badge');
    }

    public function tab()
    {
        return view('tab');
    }

    public function card()
    {
        return view('card');
    }

    public function alert()
    {
        return view('alert');
    }

    public function progressbar()
    {
        return view('progress-bar');
    }

    public function modal()
    {
        return view('modal');
    }

    public function switch ()
    {
        return view('switch');
    }

    public function grid()
    {
        return view('grid');
    }

    public function fontawesome()
    {
        return view('fontawesome');
    }

    public function typo()
    {
        return view('typo');
    }

    public function account()

    {       $users = DB::select('select * from users');
        return view('account',['users' => $users]);
    }

    public function logout(){
        
        Session::flush();
        Auth::logout();

        return Redirect('/login');
    }
























    public function nav()
    {
        return view('nav');
    }
}
