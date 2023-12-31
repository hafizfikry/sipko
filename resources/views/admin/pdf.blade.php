<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Siswa pada Pemilihan Ketua OSIS</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Kelas</th>
				<th>NIS</th>
				<th>Jenis Kelamin</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($users as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->kelas}}</td>
				<td>{{$p->nis}}</td>
				<td>{{$p->jk}}</td>
                <td>
                    @if($p->has_voted)
                    <a>Sudah Voting</a>
                    @else
                    <a>Belum Voting</a>                        
                    @endif
                </td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>