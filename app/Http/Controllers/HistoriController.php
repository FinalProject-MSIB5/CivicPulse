<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Histori;

  class HistoriController extends Controller
  {
    public function index()
    {
        $historiPengaduan = Histori::all();
        return view('Masyarakat.histori_pengaduan', compact('historiPengaduan'));
    }
  }
?>
