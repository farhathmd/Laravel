<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
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

                <h2>Data Pasien</h2>
                <div class="form-group">

                </div>
                <p>Cari Data Pasien :</p>
	            <form action="/pasien/cari" method="GET">
		            <input type="text" name="cari" placeholder="Cari Pasien .." value="{{ old('cari') }}">
		            <input type="submit" value="CARI">
                </form>
                <br/>

	            <a href="/pasien/tambah"> + Tambah Pasien Baru</a>

	            <br/>
	            <br/>

	            <table class="table table-bordered">
		            <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
			            <th>Alamat</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
			            <th>No Telfon</th>
			            <th>Gol. Darah</th>
                        <th>Berat Badan</th>
			            <th>Opsi</th>
		            </tr>
		            @foreach($pasien as $p)
		            <tr>
                        <td>{{ $p->NAMA }}</td>
			            @if($p->JENIS_KELAMIN == 1)
				            <td>Laki-Laki</td>
			            @else
				            <td>Perempuan</td>
			            @endif
                        <td>{{ $p->UMUR }}</td>
                        <td>{{ $p->ALAMAT }}</td>
                        <td>{{ $p->KOTA }}</td>
                        <td>{{ $p->KODE_POS }}</td>
			            <td>{{ $p->TELP }}</td>
                        <td>{{ $p->GOL_DARAH }}</td>
                        <td>{{ $p->BERAT_BADAN }}</td>
			            <td>
                            <a class="btn btn-warning btn-sm" href="/pasien/edit/{{ $p->ID_PASIEN }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pasien/hapus/{{ $p->ID_PASIEN }}">Hapus</a>
						</td>
		            </tr>
		            @endforeach
                </table>

                <br/>
	            Halaman : {{ $pasien ->currentPage() }} <br/>
	            Jumlah Data : {{ $pasien ->total() }} <br/>
	            Data Per Halaman : {{ $pasien ->perPage() }} <br/>


                {{ $pasien ->links() }}
            </div>
        </div>
    </div>


</body>
</html>
