<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Makanan Tradisional Sulawesi Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
        body{
            background-image: url("makan 1.png");
            background-repeat: no-repeat;
            background-position: center;
            height:100vh;
            opacity:5px;
            place-items:center;
        }
        </style>
</head>
  <body>
    <h2 class="text-center mt-2">Data Makanan Tradisional Sulawesi Selatan</h2>
    <div class="container mt-3">
      <a href="/tambah" class="btn btn-primary">Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis Makanan</th>
      <th scope="col">Asal Daerah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($makanan_tradisional as $item)
  <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->jenis_makanan }}</td>
      <td>{{ $item->asal_daerah }}</td>
      <td>
      <a href="{{ '/lihat/'.$item->id }}" class="btn btn-info">Lihat</a>
      <a href="{{ '/edit/'.$item->id }}" class="btn btn-success">Edit</a>
      <a onclick="return confirm('Yakin Untuk Menghapus?')" href="{{ '/hapus/'.$item->id }}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>