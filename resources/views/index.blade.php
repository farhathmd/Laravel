<!DOCTYPE html>
<html>
<head>
    <title>Data Dokter</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
    </style>

    <div class="container">
		<div class="card">
			<div class="card-body">

                <h2>Data Dokter</h2>
                <div class="form-group">

                </div>
                <p>Cari Data Dokter :</p>
	            <form action="/dokter/cari" method="GET">
		            <input type="text" name="cari" placeholder="Cari Dokter .." value="{{ old('cari') }}">
		            <input type="submit" value="CARI">
                </form>
                <br/>

	            <a href="/dokter/tambah"> + Tambah Dokter Baru</a>

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
		            @foreach($dokter as $p)
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
                            <a class="btn btn-warning btn-sm" href="/dokter/edit/{{ $p->ID_DOKTER }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/dokter/hapus/{{ $p->ID_DOKTER }}">Hapus</a>
						</td>
		            </tr>
		            @endforeach
                </table>

                <br/>
	            Halaman : {{ $dokter->currentPage() }} <br/>
	            Jumlah Data : {{ $dokter->total() }} <br/>
	            Data Per Halaman : {{ $dokter->perPage() }} <br/>


                {{ $dokter->links() }}
            </div>
        </div>
    </div>


</body>
</html>
