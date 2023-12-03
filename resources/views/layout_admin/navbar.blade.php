@php
$dataPengaduan = DB::table('pengaduan_masyarakat')
      ->join('masyarakat', 'masyarakat.id', '=', 'pengaduan_masyarakat.masyarakat_id')
      ->join('users', 'users.id', '=', 'masyarakat.user_id')
      ->select('users.nama', 'masyarakat.foto', 'pengaduan_masyarakat.*')
      ->where('pengaduan_masyarakat.status', 'Belum diproses')
      ->get();
$jmlNotif = DB::table('pengaduan_masyarakat')
->join('masyarakat', 'masyarakat.id', '=', 'pengaduan_masyarakat.masyarakat_id')
->join('users', 'users.id', '=', 'masyarakat.user_id')
->select('users.nama', 'masyarakat.foto', 'pengaduan_masyarakat.nama_pengaduan','pengaduan_masyarakat.status', 'pengaduan_masyarakat.foto_pengaduan')
->where('pengaduan_masyarakat.status', 'Belum diproses')
->count();
$user = Auth::user();
$idlogin = $user->id;
$join =DB::table('masyarakat')
        ->join('users', 'users.id', '=', 'masyarakat.user_id')
        ->select('users.nama as nama_masyarakat','masyarakat.*')
        ->where('users.id', $idlogin)
        ->first();

@endphp
<!--start header -->
<header>
 
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
          <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
          </div>
          <div class="top-menu ms-auto">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link  position-relative"   data-bs-toggle="modal" data-bs-target="#exampleModal">   
                   @if( $jmlNotif != null)<span class="alert-count">{{ $jmlNotif }}</span>@endif
                  <i class='bx bx-bell'></i> 
                </a>
              </li>
            </ul>
          </div>
            {{-- @foreach ($data_user as $user) --}}
              <div class="user-box dropdown">
                @if($join->foto == null)
                <img src="{{ asset('assets/img/profile/profile.jpg') }}" class="user-img" alt="user avatar">
                @endif
                @if($join->foto != null)
                <img src="{{ asset('assets/img/profile/' . $join->foto) }}" class="user-img" alt="user avatar">
                @endif
                <div class="user-info ps-3">
                  <p class="user-name mb-0">{{ $join->nama_masyarakat }}</p>
                  <p class="designattion mb-0">Admin</p>
                </div>
              </div>
            {{-- @endforeach --}}
        </nav>
    </div>
</header>
<!--end header -->

  {{-- Modals nampilin notifikasi--}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notifikasi Pengaduan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @foreach($dataPengaduan as $data)
          <div class="row mt-3">
            <div class="col-1 mt-2"><b><i class="bi bi-chevron-double-right"></i></b></div>
            <div class="col-2">
              @if($data->foto == null)
              <img src="{{ asset('assets/img/profile/profile.jpg') }}" alt="Masyarakat" class="rounded-circle" width="50">
              @endif
              @if($data->foto != null)
              <img src="{{ asset('assets/img/profile/' .$data->foto )}}" alt="masyarakat" class="rounded-circle" width="50">
              @endif
              
            </div>
            <div class="col-4">
              <p class="mb-0">  {{ $data->nama}}</p>
              <span class="badge rounded-pill bg-danger mt-0"> {{ $data->status }}</span><br>
              @php
                $awal  = date_create($data->tgl_pengaduan);
                $akhir = date_create(); // waktu sekarang
                $diff  = date_diff( $awal, $akhir );
              @endphp
              @if($diff->days == 0)
                <small class="text-muted">Hari ini</small>
              @elseif($diff->days > 0)
                <small class="text-muted"> {{ $diff->days }} hari yang lalu</small>
              @endif
            </div>
            <div class="col-4">
              <img src="{{ asset('assets/img/pengaduan/'.$data->foto_pengaduan) }}" alt="pengaduan" width="90"> 
            </div>
            <div class="col-1"></div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>