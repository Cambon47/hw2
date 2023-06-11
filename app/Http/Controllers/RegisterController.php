<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;


class RegisterController extends BaseController
{
    public function do_register()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }
        if (strlen(request('username')) == 0 || strlen(request('password')) == 0) {
            Session::put('error', 'empty_fields');
            return redirect('register')->withInput();
        } else if (request('password') != request('confirm_password')) {
            Session::put('error', 'bad_passwords');
            return redirect('register')->withInput();

        } else if (request('email') != request('confirm_email')) {
            Session::put('error', 'bad_email');
            return redirect('register')->withInput();

        }


          else  if (!preg_match('/^[a-zA-Z0-9_]{1,15}$/', request('username'))) {
            Session::put('error', 'wrong_u');
            return redirect('register')->withInput();
        }
        else if(strlen(request('password')) < 8 ||strlen(request('password')) > 15 ){
            Session::put('error', 'bad_passwords');
            return redirect('register')->withInput();
        }
         else  if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
            Session::put('error', 'wrong_e');
            return redirect('register')->withInput();


        } else if (User::where('username', request('username'))->first()) {
            Session::put('error', 'existing');
            return redirect('register')->withInput();
        } else if (User::where('email', request('email'))->first()) {
            Session::put('error', 'existing_e');
            return redirect('register')->withInput();
        }
        // Creazione utente
        $user = new User;
        $user->username = request('username');
        $user->password = password_hash(request('password'), PASSWORD_BCRYPT);
        $user->email = request('email');
        $user->save();
        // Login
        Session::put('user_id', $user->id);
        // Redirect alla home
        return redirect('home');



    }

    public function register_form()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('Registrazione')->with('error', $error);
    }

    public function login_form()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }
    public function do_login()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }
        if (strlen(request('username')) == 0 || strlen(request('password')) == 0) {
            Session::put('error', 'empty_fields');
            return redirect('login')->withInput();
        }
        $user = User::where('username', request('username'))->first();
        if (!$user || !password_verify(request('password'), $user->password)) {
            Session::put('error', 'wrong');
            return redirect('login')->withInput();
        }
        // Login
        Session::put('user_id', $user->id);
        // Redirect alla home
        return redirect('home');


    }

    public function logout()
    {
        // Elimina dati di sessione
        Session::flush();
        return redirect('login');
    }

}
