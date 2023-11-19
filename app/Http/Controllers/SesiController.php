<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
  function index()
  {
    return view('login');
  }

  function login(Request $request){
    $request->validate(
    [
      'email' => 'required',
      'password' => 'required'
    ],
    [
      'email.required' => 'Email wajib diisi',
      'password.required' => 'Password wajib diisi'
    ]);

    $infologin = [
      'email' => $request->email,
      'password' => $request->password,
    ];

    if (Auth::attempt($infologin)) {
      if (Auth::user()->role == 'admin'){
        return redirect()->route('dashboard_admin');
      }
      elseif (Auth::user()->role == 'masyarakat'){
        return redirect()->route('dashboard_masyarakat');
      }
    } else {
      return redirect('/login')->withErrors('Username dan Password yang dimasukkan tidak sesuai');
    }
  }

  function logout() {
    auth::logout();
    return redirect('');
  }
}
