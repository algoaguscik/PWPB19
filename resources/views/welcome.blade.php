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
<body background="{{ asset('img/dark.jpg') }}">



	
	<div style="font-size:40px; font-family: 'Times New Roman';" class="text-dark bg dark text-center my-5 font-weight-bold">
		Selamat Datang
	</div>

<div class="row my-5 text-center mx-md-n1">
		
	<div class="col px-mx-md-1">
		<div class="card text-center bg-dark text-light">
		  <div class="card-body">
		    <h5 class="card-title">Data Siswa</h5>
		    <p class="card-text"></p>
		    <a href="{{url('/siswa')}}" class="btn btn-primary">Lihat</a>
		  </div>
		</div>
	</div>
			

	<div class="col px-mx-md-1">
		<div class="card text-center bg-dark text-light">
		  <div class="card-body">
		    <h5 class="card-title">Data Kelas</h5>
		    <p class="card-text"></p>
		    <a href="{{url('/kelas')}}" class="btn btn-primary">Lihat</a>
		  </div>
		</div>
	</div>
		
</div>



</body>
</html>

