@extends('layout_admin.index')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
       @endif
       @if($message = Session::get('error'))
           <div class="alert alert-danger">
               <p>{{ $message }}</p>
           </div>
       @endif
        <div class="row">
            <div class="col-2">
                <h5 class="mt-2 text-uppercase" >Data Pengaduan</h5>
            </div>
            <div class="col-10">
                <a href="{{ url('/excel-export') }}" class="btn btn-success btn-sm" target="_blank" title="Export to Excel">
                    <i class="bi bi-file-earmark-spreadsheet"></i>
                </a>
            </div>
        </div>
    
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                              <th>No</th>
                              <th>Nama</th>
                              <th>Pengaduan</th>
                              <th>Alamat Pengaduan</th>
                              <th>Tanggal Pengaduan</th>
                              <th>Foto</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($dataPengaduan as $histori)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $histori->nama }}</td>
                              <td>{{ $histori->nama_pengaduan }}</td>
                              <td>{{ $histori->tgl_pengaduan }}</td>
                              <td>{{ $histori->lokasi_pengaduan }}</td>
                              <td align="center">
                                <img src="assets/img/{{ $histori->foto_pengaduan }}" width="30%" />
                              </td>
                              <td align="center">
                                @if($histori->status == "Belum diproses")
                                <span class="badge rounded-pill bg-danger"> {{ $histori->status }}</span>
                                @endif
                                @if($histori->status == "Proses")
                                <span class="badge rounded-pill bg-warning"> {{ $histori->status }}</span>
                                @endif
                                @if($histori->status == "Selesai")
                                <span class="badge rounded-pill bg-success"> {{ $histori->status }}</span>
                                @endif
                               </td>
                              <td align="center">
                                <a class="btn btn-warning btn-sm" href="{{ route('show_data.show', $histori->id) }}" title="Ubah Data Pengajuan">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection