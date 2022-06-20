<?php

namespace App\Http\Controllers;

use App\Mail\forgotpassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


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

    public function adduser()
    {
        return view('adduser');
    }


    public function dashboard()
    {
        return view('adminHome');
    }

    public function home()
    {
        return view('home');
    }



    public function viewuser(User $users)
    {
        $users = User::all();
        return view('viewuser', compact('users'));
    }


    public function edituser($id)
    {
        $user = User::where('id', '=', $id)->first();
        return view('edituser', compact('user'));
    }

    public function forgotpassword()
    {
        return view('forgotpassword');
    }

    public function postforgot(Request $request)
    {
        $data = User::where('email', '=', $request->email)->first();
        if ($data) {
            Mail::to($request->email)->send(new forgotpassword($data));
            return redirect('forgotpassword');
        }
        else {
            dd('email address not found');
        }
    }

    public function postresetpassword(Request $request)
    {
        $user_password = User::where('email','=', $request->email)->first();
        if($user_password){
            $user_password->password = $request->password;
            $user_password->save();
            return redirect('/viewuser');
        }else{
            dd('email not exists');
        }
    }

    public function resetpassword($email)
    
    {
        $user_email = $email;
        return view('resetpassword',compact('user_email'));
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('viewuser');
    }

    public function useradd(Request $request)
    {

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            dd('email already exist');
        }
        else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            return redirect('/viewuser');
        }
    }


    public function postedituser(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            return redirect('/viewuser');
        }
        else {
            dd('something went wrong');
        }
    }


    public function account()
    {
        $users = DB::select('select * from users');
        return view('account', ['users' => $users]);
    }

    public function logout()
    {

        Session::flush();
        Auth::logout();

        return Redirect('/login');
    }
























    public function nav()
    {
        return view('nav');
    }
}
