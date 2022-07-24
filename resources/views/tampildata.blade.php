<!doctype html>
<html lang="en">

<head>
    <!--     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>CRUD LARAVEL</title>
</head>

<body>
    <h1 class="text-center mt-5">Edit Data siswa</h1>
    <div class="container">
        <div class="row justify-content-center">`
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="custom-select" name="jeniskelamin">
                                    <?php $selc = $data->jeniskelamin ?>
                                    <option value="cowo" {{ $selc=='cowo' ? 'selected=" selected"' : '' }}>cowo</option>
                                    <option value="cewe" {{ $selc=='cewe' ? 'selected=" selected"' : '' }}>cewe</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Nomor telepom</label>
                                <input type="number" class="form-control" name="notelpon" value="{{ $data->notelpon }}">
                            </div>
                            <label for="">masukkan foto</label>
                            <img src="/fotosiswa/{{$data->foto}}" width="200">
                            <div class="custom-file">
                                {{-- <input type="file" id="foto" name="foto" accept="image/*" value="{{$data->foto}}">
                                --}}
                                <input type="file" id="foto" name="foto" accept="foto/*" style="display:none"
                                    value="{{$data->foto}}">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


    -->
</body>

</html>