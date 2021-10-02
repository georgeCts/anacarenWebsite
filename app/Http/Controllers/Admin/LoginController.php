<?php

namespace App\Http\Controllers\Admin;

use Redirect;
use App\Library\Errors;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        if(Auth::check())
            return Redirect('/panel');
        else
            return view("panel.Login");
    }

    public function access(Request $request) {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
           return Redirect('/panel');
        } else {
            Session::flash("login_error_title", Errors::LOGIN_01_TITLE);
            Session::flash("login_error_message", Errors::LOGIN_01_MESSAGE);

            return Redirect('/login-panel');
        }
    }

    public function logout() {
        if (Auth::check()) {
           Auth::logout();
           Session::flush();
        }

        return Redirect('/login-panel');
   }
}
