<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Registrasi</title>
</head>
<body>
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Registrasi</h1>

        <form action="/registrasi/post" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" value="" name="nama" class="form-control">
            </div>
            <input type="hidden" value="" name="id" class="form-control">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control">
            </div>
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" name="no_telepon" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenin Kelamin</label> <br>
                @foreach($arr_gender as $jk )
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="{{ $jk }}">
                    <label class="form-check-label" for="gender">{{ $jk }}</label>
                  </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Pengaduan</label>
                <input type="file" class="form-control"  name="foto" value="" />
            </div>
            <p>
              sudah punya akun? <a href="{{ route ('login') }}">Login!</a>
            </p>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Registrasi</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>