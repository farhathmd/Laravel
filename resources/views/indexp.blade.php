<!DOCTYPE html>
<html>
<head>
    <title>Data Petugas</title>
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

                <h2>Data Petugas</h2>
                <div class="form-group">

                </div>
                <p>Cari Data Petugas :</p>
	            <form action="/petugas/cari" method="GET">
		            <input type="text" name="cari" placeholder="Cari Petugas .." value="{{ old('cari') }}">
		            <input type="submit" value="CARI">
                </form>
                <br/>

	            <a href="/petugas/tambah"> + Tambah Petugas Baru</a>

	            <br/>
	            <br/>

	            <table class="table table-bordered">
		            <tr>
                        <th>Nama</th>
                        <th>Umur</th>
			            <th>Jenis Kelamin</th>
			            <th>Jabatan</th>
			            <th>No Telfon</th>
			            <th>Alamat</th>
			            <th>Opsi</th>
		            </tr>
		            @foreach($petugas as $p)
		            <tr>
                        <td>{{ $p->NAMA }}</td>
                        <td>{{ $p->UMUR }}</td>
			            @if($p->JENIS_KELAMIN == 1)
				            <td>Laki-Laki</td>
			            @else
				            <td>Perempuan</td>
			            @endif
			            <td>{{ $p->JABATAN }}</td>
			            <td>{{ $p->TELP }}</td>
			            <td>{{ $p->ALAMAT }}</td>
			            <td>
                            <a class="btn btn-warning btn-sm" href="/petugas/edit/{{ $p->ID_PETUGAS }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/petugas/hapus/{{ $p->ID_PETUGAS }}">Hapus</a>
						</td>
		            </tr>
		            @endforeach
                </table>

                <br/>
	            Halaman : {{ $petugas ->currentPage() }} <br/>
	            Jumlah Data : {{ $petugas ->total() }} <br/>
	            Data Per Halaman : {{ $petugas ->perPage() }} <br/>


                {{ $petugas ->links() }}
            </div>
        </div>
    </div>


</body>
</html>
