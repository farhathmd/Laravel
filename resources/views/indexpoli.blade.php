<!DOCTYPE html>
<html>
<head>
    <title>Data Poli</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <style type="text/css">
		.pagination li{
		float: left;
		list-style-type: none;
		margin:5px;
		}
        body{
            background: url(test.jpg);
        }


    </style>

    <div class="container">
		<div class="card">
			<div class="card-body">

                <h2>Data Poli</h2>
                <div class="form-group">

                </div>
                <p>Cari Data Poli :</p>
	            <form action="/poli/cari" method="GET">
		            <input type="text" name="cari" placeholder="Cari Poli .." value="{{ old('cari') }}">
		            <input type="submit" value="CARI">
                </form>
                <br/>

	            <a href="/poli/tambah"> + Tambah Poli Baru</a>

	            <br/>
	            <br/>

	            <table class="table table-bordered">
		            <tr>
                        <th>Nama Poli</th>
			            <th>Opsi</th>
		            </tr>
		            @foreach($poli as $p)
		            <tr>
                        <td>{{ $p->NAMA_POLI }}</td>
			            <td>
                            <a class="btn btn-warning btn-sm" href="/poli/edit/{{ $p->ID_POLI }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/poli/hapus/{{ $p->ID_POLI }}">Hapus</a>
						</td>
		            </tr>
		            @endforeach
                </table>

                <br/>
	            Halaman : {{ $poli ->currentPage() }} <br/>
	            Jumlah Data : {{ $poli ->total() }} <br/>
	            Data Per Halaman : {{ $poli ->perPage() }} <br/>


                {{ $poli ->links() }}
            </div>
        </div>
    </div>


</body>
</html>
