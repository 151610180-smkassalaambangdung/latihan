<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
<center>
<table border="1">
<tr class="bg-info">
	<th>id</th>
	<th>nama</th>
	<th>alamat</th>
	<th>jk</th>
	</tr>
		
		<?php 
		$no=1;
		?>
		
		<tr>
			<td>{{$no++}}</td>
			<td>{{$siswa->nama_siswa}}</td>
			<td>{{$siswa->alamat }}</td>
			<td>{{$siswa->jk }}</td>
		</tr>
		
</table>
</center>
</body>
</html>