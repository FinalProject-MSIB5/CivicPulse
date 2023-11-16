<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mendapatkan data dalam tabel user
    public function index()
    {
         $users = Masyarakat::all(); // Ambil semua data pengguna dari model User
        return view('admin.data_user', compact('users'));
    }
}
