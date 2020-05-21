<!DOCTYPE html>
<html>
<head>
  <title>Algo Aguscik Laravel</title>
</head>
<script src="https://kit.fontawesome.com/503eca56fe.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<body>

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

  <div class="mx-3 mt-3 dark col-md-4 py-3 btn-primary">
      <h1><i class="fas fa-plus mx-2"></i>Form Data</h1>
  </div>

  <form class="col-md-5 p-5 pt-2 bg" action="{{ url('siswa') }}" method="post"> 
      @csrf

    <div class="form-group row">
      <label for="nis" class="col-sm-3 col-form-label">NIS</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis') }}" autocomplete="off">
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-sm-4 col-form-label" >Nama Lengkap</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="namalengkap" value="{{ old('namalengkap') }}">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenkel" id="gridRadios1" value="P" {{ old('jenkel')=="P"?"checked":"" }} >
            <label class="form-check-label" for="gridRadios1">
            <i class="fas fa-female mx-2"></i>Perempuan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenkel" id="gridRadios2" value="L" {{ old('jenkel')=="L"?"checked":"" }}>
            <label class="form-check-label" for="gridRadios2">
            <i class="fas fa-male mx-2"></i>Laki-Laki
            </label>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group row">
      <div class="col-auto mt-1">
        <div>
          <label for="customControlAutosizing">Golongan Darah</label>
        </div>
      </div>
      <div class="my-1">
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="golongan_darah">
          <option selected value="">-Pilih Goldar-</option>
          <option value="A" {{ old('golongan_darah')=="A"?"selected":"" }}>A</option>
          <option value="B" {{ old('golongan_darah')=="B"?"selected":"" }}>B</option>
          <option value="O" {{ old('golongan_darah')=="O"?"selected":"" }}>O</option>
          <option value="AB" {{ old('golongan_darah')=="AB"?"selected":"" }}>AB</option>
        </select>
      </div>
    </div>
    
    <div class="form-group row my-3">
      <div class="col-sm-10 mb-2">
          <a href="{{ url()->previous() }}"><div class="btn btn-danger mr-1">Kembali</div></a>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</body>
</html>
