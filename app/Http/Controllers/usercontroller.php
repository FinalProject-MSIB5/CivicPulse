<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Masyarakat;

  class UserController extends Controller
  {
      public function index()
      {
        $dataUser = Masyarakat::all();
        return view('admin.data_user', compact('dataUser'));
      }
  }
?>