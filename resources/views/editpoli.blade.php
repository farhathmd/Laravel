<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
</head>
<body>

	<h2>Edit Poli</h2>

	<a href="/poli"> Kembali</a>

	<br/>
	<br/>

	@foreach($poli as $p)
	<form action="/poli/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID_POLI }}"> <br/>
        Nama Poli <input type="text" name="nama_poli" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
