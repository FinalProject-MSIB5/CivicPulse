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
                            <tr>
                                <th>ID</th>
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
                            <tr>
                                <td>1</td>
                                <td>Zian</td>
                                <td>Jalan Rusak</td>
                                <td>jalan Ahmad Yani</td>
                                <td>2023-11-30</td>
                                <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                                <td><span class="badge bg-success text-white shadow-sm">Selesai</span></td>
                                <td>
                                <form method="POST" action="">
                                      <a class="badge bg-info text-white shadow-sm ">
                                        <i class="bi bi-eye fs-6"></i>
                                      </a>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Zian</td>
                                <td>Jalan Rusak</td>
                                <td>jalan Ahmad Yani</td>
                                <td>2023-11-30</td>
                                <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                                <td><span class="badge bg-info text-white shadow-sm">Diproses</span></td>
                                <td>
                                <form method="POST" action="">
                                      <a class="badge bg-info text-white shadow-sm ">
                                        <i class="bi bi-eye fs-6"></i>
                                      </a>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Zian</td>
                                <td>Jalan Rusak</td>
                                <td>jalan Ahmad Yani</td>
                                <td>2023-11-30</td>
                                <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                                <td><span class="badge bg-danger text-white shadow-sm">Belum diproses</span></td>
                                <td>
                                <form method="POST" action="">
                                      <a class="badge bg-info text-white shadow-sm ">
                                        <i class="bi bi-eye fs-6"></i>
                                      </a>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Zian</td>
                                <td>Jalan Rusak</td>
                                <td>jalan Ahmad Yani</td>
                                <td>2023-11-30</td>
                                <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                                <td><span class="badge bg-success text-white shadow-sm">Paid</span></td>
                                <td>
                                <form method="POST" action="">
                                      <a class="badge bg-info text-white shadow-sm ">
                                        <i class="bi bi-eye fs-6"></i>
                                      </a>
                                  </form>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Zian</td>
                                <td>Jalan Rusak</td>
                                <td>jalan Ahmad Yani</td>
                                <td>2023-11-30</td>
                                <<td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                                <td><span class="badge bg-success text-white shadow-sm">Paid</span></td>
                                <td>
                                  <form method="POST" action="">
                                      <a class="badge bg-info text-white shadow-sm ">
                                        <i class="bi bi-eye fs-6"></i>
                                      </a>
                                  </form>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection