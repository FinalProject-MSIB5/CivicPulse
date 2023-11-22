<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
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
        ->select('users.*','masyarakat.id as masyarakat_id','masyarakat.user_id','masyarakat.nik','masyarakat.no_telepon',
        'masyarakat.alamat','masyarakat.gender','masyarakat.foto')
        ->where('users.id', $idlogin)
        ->first();
        $arr_gender = ['laki-laki','perempuan'];
        return view('Masyarakat.profile_masyarakat', compact('profile','arr_gender'));
    }

    public function update(Request $request, string $id)
    {

         DB::table('users')->where('id', $id)->update([
            'nama' => $request->input('nama'),
        ]);
         //------------ambil foto lama apabila user ingin ganti foto-----------
         $foto = DB::table('masyarakat')->select('foto')->where('user_id',$id)->get();
         foreach($foto as $f){
             $namaFileFotoLama = $f->foto;
         }
         //------------apakah user  ingin ubah upload foto baru-----------
         if(!empty($request->foto)){
             //jika ada foto lama, hapus foto lamanya terlebih dahulu
             if(!empty($namaFileFotoLama)) unlink('assets/img/profile/'.$namaFileFotoLama);
             //lalukan proses ubah foto lama menjadi foto baru
             $nama = Str::random(20);
             $extensi = $request->foto->extension();
             $fileName =  $nama . '.' .  $extensi;
             //$fileName = $request->foto->getClientOriginalName();
             $request->foto->move(public_path('assets/img/profile/'),$fileName);
         }
         else{
             $fileName = $namaFileFotoLama;
         }
        
        DB::table('masyarakat')->where('user_id',$id)->update(
        [
            'nik' => $request->input('nik'),
            'no_telepon' => $request->input('no_telepon'),
            'alamat' => $request->input('alamat'),
            'gender' => $request->input('gender'),
            'foto'=>$fileName,
        ]);
        return redirect('/histori_pengaduan')->with('success','Data Profile Berhasil Diubah');
        
    }
}
