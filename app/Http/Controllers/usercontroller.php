<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;
use App\Models\User; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mendapatkan data dalam tabel user
    public function index()
    {
         $users = Masyarakat::all(); // Ambil semua data pengguna dari model User
        // $users = DB::table('masyarakat')->get();
        return view('admin.data_user', compact('users'));
    }
}
