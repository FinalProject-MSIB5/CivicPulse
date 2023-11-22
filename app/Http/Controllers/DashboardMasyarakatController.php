<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardMasyarakatController extends Controller
{
    //

    public function profile(){
        $user = Auth::user();
        $idlogin = $user->id;
        $profile =DB::table('masyarakat')
        ->join('users', 'users.id', '=', 'masyarakat.user_id')
        ->select('users.*','masyarakat.*')
        ->where('users.id', $idlogin)
        ->first();
        return view('Masyarakat.profile_masyarakat', compact('profile'));
    }
}
