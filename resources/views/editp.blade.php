<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
</head>
<body>

	<h2>Edit Petugas</h2>

	<a href="/petugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($petugas as $p)
	<form action="/petugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID_PETUGAS }}"> <br/>
        Nama <input type="text" name="nama" required="required"> <br/>
        Umur <input type="number" name="umur" required="required"> <br/>
        Jenis Kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		No Telfon <input type="number" name="telp" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
