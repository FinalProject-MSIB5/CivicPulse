<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataUserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DataUserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return new DataUserResource(true,'Semua Data User',$users);
  }

  public function create(Request $request)
  {
    $validator = Validator::make($request->all(),[
      'id' => 'required|max:45',
      'nama'=>'required|max:45',
      'email'=>'required|email',
      'password'=>'required|max:45',
      'nik'=>'required|min:16',
      'no_telepon'=>'required|max:12',
      'alamat'=>'required|max:100',
      'gender'=>'required|max:45',
      'foto'=>'required|image|mimes:jpg,png,jpeg|max:2048'
    ]);

    if($validator->fails()){
      return response()->json($validator->errors(),422);
    }

    $user = User::create([
      'id' => $request->input('id'),
      'nama'=>$request->nama,
      'email'=>$request->email,
      'password'=>$request->password
    ]);
    if(!empty($request->foto)){
      $nama = Str::random(5);
      $extensi = $request->foto->extension();
      $fileName =  $nama . '.' .  $extensi;
      //$fileName = $request->foto->getClientOriginalName();
      $request->foto->move(public_path('assets/img/profile'),$fileName);
    }
    else{
        $fileName = '';
    }

    DB::table('masyarakat')->insert([
        'user_id' => $user->id,
        'nik'=>$request->nik,
        'no_telepon'=>$request->no_telepon,
        'alamat'=>$request->alamat,
        'gender'=>$request->gender,
        'foto'=>$fileName,
      ]);
     
      //pengkondisian postman 
      if ($user) {
        return new DataUserResource(true,'Data berhasil di input',$user);
    } else {
      return response()->json(
        [
          'success'=>false,
          'message'=>'Data tidak dapat di input',
          'data'=>$user
        ],404
      );
    }
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
    $validator = Validator::make($request->all(), [
      'id' => 'required|max:45',
      'nama' => 'required|max:45',
      'email' => 'required|email',
      'password' => 'required|max:45',
      'nik' => 'required|min:16',
      'no_telepon' => 'required|max:12',
      'alamat' => 'required|max:100',
      'gender' => 'required|max:45',
      'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048'
  ]);
  
  if ($validator->fails()) {
      return response()->json($validator->errors(), 422);
  }
  
  // Ambil user yang akan diupdate
  $user = User::find($request->input('id'));
  
  // Perbarui data user
  $user->update([
      'nama' => $request->nama,
      'email' => $request->email,
      'password' => $request->password
  ]);
  
  // Perbarui data masyarakat
  if (!empty($request->foto)) {
      $nama = Str::random(5);
      $extensi = $request->foto->extension();
      $fileName = $nama . '.' . $extensi;
      $request->foto->move(public_path('assets/img/profile'), $fileName);
  } else {
      $fileName = '';
  }
  
  DB::table('masyarakat')->where('user_id', $user->id)->update([
      'nik' => $request->nik,
      'no_telepon' => $request->no_telepon,
      'alamat' => $request->alamat,
      'gender' => $request->gender,
      'foto' => $fileName,
  ]);
  
  // Pengkondisian Postman
  if ($user) {
      return new DataUserResource(true, 'Data berhasil diupdate', $user);
  } else {
      return response()->json(
          [
              'success' => false,
              'message' => 'Data tidak dapat diupdate',
              'data' => $user
          ], 404
      );
  }
  
  }

  public function destroy(string $id)
  {
    
  }
}
