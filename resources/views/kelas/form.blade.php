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

</body>
</html>

@if(session('error'))
<div class="alert alert-error col-md-3 mx-5 text-wrap">
    {{ session('error') }}
</div>
@endif


@if(count($errors)>0)
<div class="alert alert-danger col-md-3 mx-2 text-wrap">
    <strong>Perhatian</strong><br />
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="mx-4 mt-3 dark col-md-4 py-3 btn-primary">
    <h1><i class="fas fa-plus mx-2"></i>Form Data</h1>
</div>

<form class="col-md-5 mx-2 p-5 pt-2 bg" action="{{ url('kelas') }}" method="post"> 
    @csrf

  <div class="form-group row">
    <label for="nama_kelas" class="col-sm-3 col-form-label">Nama Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="ruangan" class="col-sm-4 col-form-label">Ruangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ruangan" name="lokasi_ruangan" value="{{ old('lokasi_ruangan') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="walikelas" class="col-sm-4 col-form-label" >Wali Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="walikelas" name="nama_wali_kelas" value="{{ old('nama_wali_kelas
      ') }}">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0">Jurusan</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="rpl" value="Rekayasa Perangkat Lunak" {{ old('jurusan')=="Rekayasa Perangkat Lunak"?"checked":"" }} >
          <label class="form-check-label" for="rpl">
          Rekayasa Perangkat Lunak
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="mm" value="Multimedia" {{ old('jurusan')=="Multimedia"?"checked":"" }}>
          <label class="form-check-label" for="mm">
          Multimedia
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="tkj" value="Teknik Komputer Jaringan" {{ old('jurusan')=="Teknik Komputer Jaringan"?"checked":"" }}>
          <label class="form-check-label" for="tkj">
          Teknik Komputer Jaringan
          </label>
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="tav" value="Teknik Audio Video" {{ old('jurusan')=="Teknik Audio Video"?"checked":"" }}>
          <label class="form-check-label" for="tav">
          Teknik Audio Video
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="toi" value="Teknik Otomasi Industri" {{ old('jurusan')=="Teknik Otomasi Industri"?"checked":"" }}>
          <label class="form-check-label" for="toi">
          Teknik Otomasi Industri
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="titl" value="Teknik Instalasi Tenaga Listrik" {{ old('jurusan')=="Teknik Instalasi Tenaga Listrik"?"checked":"" }}>
          <label class="form-check-label" for="titl">
          Teknik Instalasi Tenaga Listrik
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  
  <div class="form-group row my-3">
    <div class="col-sm-10 mb-2">
        <a href="{{ url()->previous() }}"><div class="btn btn-danger mr-1">Kembali</div></a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
