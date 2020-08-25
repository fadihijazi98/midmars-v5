<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('home');
    }

    public function change_password_view() {
        return view('auth.passwords.change');
    }

    public function change_password(PasswordValidate $requset) {
        $password = $requset->new_pass;
        Auth::logoutOtherDevices($password);
        // this method will destroy all session of this account except the current session, and change password for user
        return redirect('/home');
    }
}
