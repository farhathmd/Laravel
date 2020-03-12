<!DOCTYPE html>
<html>
<head>
	<title>Tambah Poli</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>Data Poli</h2>

	<a href="/poli"> Kembali</a>

	<br/>
	<br/>

	<form action="/poli/store" method="post">
		{{ csrf_field() }}
		<table>
			<tr>
				<td>Nama Poli </td>
				<td><input type="text" name="nama_poli" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan Data"></td>
			</tr>
		</table>
	</form>

</body>
</html>
