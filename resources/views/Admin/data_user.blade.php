@extends('Templates.index')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Menu Masyarakat</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Histori Pengaduan</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <th>
                                <th>ID</th>
                                <th>NIK</th>
                                <th>No.Telepon</th>
                                <th>Alamat</th>
                                <th>Gender</th>
                                <th>foto</th>
                            </th>
                        </thead>
                        <tbody>
                            @foreach($users as $masyarakat)
                            <tr>
                                <td>{{ $masyarakat->id }}</td>
                                <td>{{ $masyarakat->user_id }}</td>
                                <td>{{ $masyarakat->nik }}</td>
                                <td>{{ $masyarakat->no_telepon }}</td>
                                <td>{{ $masyarakat->alamat }}</td>
                                <td>{{ $masyarakat->gender }}</td>
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