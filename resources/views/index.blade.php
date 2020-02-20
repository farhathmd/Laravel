<!DOCTYPE html>
<html>
<head>
	<title>Data Dokter</title>
</head>
<body>

	<h2>Data Dokter</h2>

	<a href="/dokter/tambah"> + Tambah Dokter Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jabatan</th>
			<th>No Telfon</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($dokter as $p)
		<tr>
			<td>{{ $p->NAMA }}</td>
			@if($p->JENIS_KELAMIN == 1)
				<td>Laki-Laki</td>
			@else
				<td>Perempuan</td>
			@endif
			<td>{{ $p->JABATAN }}</td>
			<td>{{ $p->TELP }}</td>
			<td>{{ $p->ALAMAT }}</td>
			<td>
				<a href="/dokter/edit/{{ $p->ID_DOKTER }}">Edit</a>
				|
				<a href="/dokter/hapus/{{ $p->ID_DOKTER }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>