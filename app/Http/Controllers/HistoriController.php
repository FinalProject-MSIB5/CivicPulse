<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Histori;
  use App\Models\Pengaduan_masyarakat;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Str;
  //  use Carbon\Carbon;
  class HistoriController extends Controller
  {
    public function index()
    {
        $historiPengaduan = Histori::all();
        return view('Masyarakat.histori_pengaduan', compact('historiPengaduan'));
    }
    
    // View Form
    public function viewForm()
    {
        return view('Masyarakat.ajukan_pengaduan');
    }

    public function store(Request $request)
    {

      $validated = $request->validate(
        //tentukan validasi data berdasarkan constraint field
        [
            'nama_pengaduan' => 'required|max:60',
            'lokasi_pengaduan' => 'required',
            'deskripsi' => 'required',
            'foto_pengaduan' => 'required|nullable|image|mimes:jpg,jpeg,png,gif,svg|min:2|max:9000',//KB
        ],
        //custom pesan errornya berbahasa indonesia
        [
            'nama_pengaduan.required'=>'Pengaduan Wajib Diisi',
            'nama_pengaduan.max'=>'Nama Maksimal 60 karakter',
            'lokasi_pengaduan.required'=>'Lokasi Pengaduan Wajib Diisi',
            'deskripsi.required'=>'Deskripsi Pengaduan Wajib Diisi',
            'foto_pengaduan.required'=>'Foto Pengaduan Wajib Diisi',
            'foto_pengaduan.min'=>'Ukuran file kurang 2 KB',
            'foto_pengaduan.max'=>'Ukuran file melebihi 9000 KB',
            'foto_pengaduan.image'=>'File foto bukan gambar',
            'foto_pengaduan.mimes'=>'Extension file selain jpg,jpeg,png,gif,svg',
        ]
    );
        if(!empty($request->foto_pengaduan)){
          $nama = Str::random(20);
          $extensi = $request->foto_pengaduan->extension();
          $fileName =  $nama . '.' .  $extensi;
          //$fileName = $request->foto->getClientOriginalName();
          $request->foto_pengaduan->move(public_path('assets/img'),$fileName);
        }
        else{
            $fileName = '';
        }
        DB::table('pengaduan_masyarakat')->insert(
            [    
                 'masyarakat_id'=>$request->input('masyarakat_id'),
                 'nama_pengaduan'=>$request->nama_pengaduan,
                 'tgl_pengaduan'=> now(),
                 'deskripsi'=>$request->deskripsi,
                 'lokasi_pengaduan'=>$request->lokasi_pengaduan,
                 'foto_pengaduan'=>$fileName,
                 'status'=>'Belum diproses',
            ]);
        return redirect('/histori_pengaduan')->with('success','Data Pengajuan Pengaduan Berhasil Disimpan');
    }

  public function show(string $id)
  {
      $historiPengaduan = Histori::find($id);
      return view('Masyarakat.detail_pengaduan',compact('historiPengaduan'));
  }
}
?>

