<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
</head>
<body>

	<h2>Edit Dokter</h2>

	<a href="/dokter"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($dokter as $p)
	<form action="/dokter/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID_DOKTER }}"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
        Jenis Kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		No Telfon <input type="number" name="telp" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>