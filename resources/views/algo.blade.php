<!DOCTYPE html>
<html>
<head>
	<title>Algo Aguscik Laravel</title>
</head>
<body>
	<table border="2">
		<tr>
			<th>No</th>
			<th>Nama Kelas</th>
			<th>Jurusan</th>
			<th>Ruangan</th>
			<th>Wali Kelas</th>
		</tr>
		@foreach($kelas as $value)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $value->nama_kelas }}</td>
			<td>{{ $value->jurusan }}</td>
			<td>{{ $value->ruangan }}</td>
			<td>{{ $value->wali_kelas }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>