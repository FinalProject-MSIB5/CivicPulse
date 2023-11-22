<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegistrasiController extends Controller
{
  function Registrasi()
  {
    return view('registrasi');
  }

  function createRegistrasi(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6'
    ],[
      'nama.required' => 'Nama wajib diisi',
      'email.required' => 'Email wajib diisi',
      'email.email' => 'Silahkan masukkan email yang valid',
      'email.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
      'password.required' => 'Password wajib diisi',
      'password.min' => 'Minimum password yang diizinkan adalah 6 karakter',
    ]);

    $data = [
      'nama'=>$request->nama,
      'email'=>$request->email,
      'password'=>$request->password
    ];

    $user = User::create($data);

    auth()->login($user);
    return redirect()->to('/login');
  }
}
