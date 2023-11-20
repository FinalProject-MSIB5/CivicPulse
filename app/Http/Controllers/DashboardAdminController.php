<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use App\Exports\PengaduanExport;
use Illuminate\Support\Facades\DB;
use App\Models\Pengaduan_masyarakat;
use Maatwebsite\Excel\Facades\Excel;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $ar_user = Masyarakat::count();
        $ar_pengaduan = Pengaduan_masyarakat::count();
        $ar_label =['Belum diproses','Proses','Selesai'];

        $stt_blm = Pengaduan_masyarakat::where('status', 'Belum diproses')->count();
        $stt_proses = Pengaduan_masyarakat::where('status', 'Proses')->count();
        $stt_selesai = Pengaduan_masyarakat::where('status', 'Selesai')->count();
        // $angkaBulan = $pengaduan_perbulan->pluck('month');

        function angkaKeNamaBulan($angkaBulan) {
            return Carbon::createFromDate(null, $angkaBulan, 1)->format('F');
        }
        
        $pengaduan_perbulan = DB::table('pengaduan_masyarakat')
            ->select(DB::raw('MONTH(tgl_pengaduan) as month'), DB::raw('YEAR(tgl_pengaduan) as year'), DB::raw('COUNT(*) as total'))
            ->groupBy(DB::raw('YEAR(tgl_pengaduan)'), DB::raw('MONTH(tgl_pengaduan)'))
            ->get();
        
        // Mengonversi hasil query
        $namaBulan = $pengaduan_perbulan->map(function ($item) {
            $item->month_name = angkaKeNamaBulan($item->month);
            return $item;
        });

        return view('Admin.dashboard_admin',compact('ar_user','ar_pengaduan','ar_label','stt_blm','stt_proses','stt_selesai','pengaduan_perbulan','namaBulan'));
    }

    public function export()
    {
        return Excel::download(new PengaduanExport,'Pengaduan.xlsx');
    }
}
