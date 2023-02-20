<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('admin.auth.index-register');
    }

    public function registerpost(Request $request)
    {
        $registeraction=$request->validate([
            'username'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);

        $registeraction=User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        Session::flash('status', 'Success');
        Session::flash('message', 'Registrasi Berhasil, Silahkan Hubungi Admin Untuk Aktivasi Account');

        return redirect('register');
    }

    public function login()
    {
        return view('admin.auth.index-login');
    }

    public function authenticate(Request $request)
    {
        $credentials=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials))
        {

            if(Auth::user()->status != 'active')
            {
                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'Failed');
                Session::flash('message', 'Akun Anda Tidak Aktif');

                return redirect()->intended('login');
            }

            $request->session()->regenerate();

            if(Auth::user()->level == 1)
            {
                return redirect()->intended('dashboard');
            }

            if(Auth::user()->level == 2)
            {
                return redirect()->intended('dashboard');
            }

        }

        Session::flash('status', 'Failed');
        Session::flash('message', 'Login Gagal');

        return redirect('login');
    }

    public function logout(Request $request)
    {
        if(!Auth::check())
        {
            abort(404);
        }

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
