<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Data Siswa</title>
</head>

<body>
  <h1>Data Siswa</h1>
  <a href="/tambahdata" class="btn btn-primary">tambah</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">No Telpon</th>
        <th scope="col">foto</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
      {{-- //variable $data kita ambil dari controlller --}}
      @php
      $i =1;
      @endphp
      @foreach ($data as $item)
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->jeniskelamin }}</td>
        <td>{{ $item->notelpon }}</td>
        <td>
          <img src="fotosiswa/{{$item->foto}}" width="100">

        </td>
        <td>
          <a href="/tampildata/{{ $item->id }}" class="btn btn-info">edit</a>
          <a href="/delete/{{ $item->id }}" class="btn btn-danger">hapus</a>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>

</body>

</html>