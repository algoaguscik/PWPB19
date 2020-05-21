<!DOCTYPE html>
<html>
<head>
	<title>Algo Aguscik Laravel</title>
</head>
<body>
	<table border="2">
		<tr>
			<th colspan="2">Tulisan Ini Ditampilkan Lewat Views</th>
		</tr>
		<tr>
			<th>Nama</th>
			<th>Jurusan</th>
		</tr>
		<tr>
			<td>{{ $data['nama'] }}</td>
			<td>{{ $data['jurusan'] }}</td>
		</tr>
	</table>
</body>
</html>