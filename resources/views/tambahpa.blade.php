<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pasien</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>Data Pasien</h2>

	<a href="/pasien"> Kembali</a>

	<br/>
	<br/>

	<form action="/pasien/store" method="post">
		{{ csrf_field() }}
		<table>
			<tr>
				<td>Nama </td>
				<td><input type="text" name="nama" required="required"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td><input type="text" name="jenis_kelamin" required="required"></td>
			</tr>
			<tr>
				<td>Umur </td>
				<td><input type="text" name="umur" required="required"></td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td><textarea name="alamat" required="required"></textarea></td>
			</tr>
			<tr>
				<td>Kota </td>
				<td><input type="text" name="kota" required="required"></td>
			</tr>
			<tr>
				<td>Kode Pos </td>
				<td><input type="number" name="kode_pos" required="required"></td>
			</tr>
			<tr>
				<td>Nomor Tlp. </td>
				<td><input type="number" name="telp" required="required"></td>
			</tr>
			<tr>
				<td>Golongan Darah </td>
				<td><input type="text" name="gol_darah"></td>
			</tr>
			<tr>
				<td>Berat Badan </td>
				<td><input type="number" name="berat_badan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan Data"></td>
			</tr>
		</table>
	</form>

</body>
</html>
