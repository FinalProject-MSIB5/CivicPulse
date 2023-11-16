@extends('Templates.index')
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
                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Data Masyarakat</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>NIK</th>
                              <th>No.Telepon</th>
                              <th>Alamat</th>
                              <th>Gender</th>
                              <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataUser as $listUser)
                            <tr>
                              <td>{{ $listUser->id }}</td>
                              <td>{{ $listUser->user_id }}</td>
                              <td>{{ $listUser->nik }}</td>
                              <td>{{ $listUser->no_telepon }}</td>
                              <td>{{ $listUser->alamat }}</td>
                              <td>{{ $listUser->gender }}</td>
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