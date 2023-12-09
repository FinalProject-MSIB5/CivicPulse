<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataUserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class DataUserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return new DataUserResource(true,'Semua Data User',$users);
  }

  public function create()
  {
    
  }

  public function store(Request $request)
  {
    
  }

  public function show($id)
  {
    $user = User::find($id);

    if ($user) {
      return new DataUserResource(true,'Data User by id berhasil ditemukan',$user);
    } else {
      return response()->json(
        [
          'success'=>false,
          'message'=>'Data User tidak ditemukan',
          'data'=>$user
        ],404
      );
    }
  }

  public function edit(string $id)
  {
    
  }

  public function update(Request $request, string $id)
  {
    
  }

  public function destroy(string $id)
  {
    
  }
}
