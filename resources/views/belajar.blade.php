<!DOCTYPE html>
<html>
<head>
    <title>Algo Aguscik Laravel</title>
    <script src="https://kit.fontawesome.com/503eca56fe.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

    <div style="font-size:40px; font-family: 'Times New Roman';" class="mt-2 dark py-3 text-center text-dark font-weight-bold">
        DATA SISWA
    </div>

    @if(session('success'))
    <center>
        <div class="alert alert-success col-md-3 mx-5 text-wrap">
            {{ session('success') }} <i class="ml-1 fas fa-check"></i>
        </div>
    </center>
    @endif

    @if(session('error'))
    <center>
        <div class="alert alert-error col-md-3 mx-5 text-wrap">
            {{ session('error') }} <i class="ml-1 fas fa-times"></i>
        </div>
    </center>
    @endif

    <div class="container">

        <div class="btn btn-success text-center mb-3">
            <a href="{{ url('/siswa/create') }}" class="text-decoration-none">
                <h2>
                    <i class="fas fa-plus mx-2 text-white"></i><font class="mr-2 text-white">Tambah</font>
                </h2>
            </a>
        </div>

        <table class="table text-center my-2" border="3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col" >Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $row)
                <tr>
                    <th scope="row">{{ isset($i)? ++$i : $i=1 }}</th>
                    <td>{{ $row->nis }}</td>
                    <td>{{ $row->namalengkap }}</td>
                    <td>{{ $row->jenkel }}</td>
                    <td>{{ $row->golongan_darah }}</td>
                    <td>
                    <div class="d-inline">
                        <div class="btn btn-primary my-2 mx-1"><h6><i class="fas fa-pen text-center"></i></h6></div>
                        <button class="btn btn-danger mx-1"><h6><i class="fas fa-trash-alt"></i></h6></button>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>   
</body>
</html>


 
