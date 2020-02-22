<!DOCTYPE html>
<html>
<head>
	<title>Tambah Dokter</title>
</head>
<body>

	<h2>Data Pegawai</h2>

	<a href="/dokter"> Kembali</a>

	<br/>
	<br/>

	<form action="/dokter/store" method="post">
		{{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br/>
        Umur <input type="text" name="umur" required="required"> <br/>
        Jenis Kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		No Telfon <input type="number" name="telp" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
