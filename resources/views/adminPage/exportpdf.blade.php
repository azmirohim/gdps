<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke PDF Dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

		<h1>Export Data Ke Document Dengan PHP <br/> www.garudapratama.com</h1>
		
	<table>
		<tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>ASAL DAERAH</th>
            <th>No.KTP</th>
            <th>TANGGAL LAHIR</th>
            <th>UMUR</th>
            <th>PENDIDIKAN</th>
            <th>JURUSAN</th>
            <th>NILAI</th>
            <th>ASAL SEKOLAH</th>
            <th>JENIS</th>
            <th>JOB</th>
            <th>EMAIL</th>
            <th>NO HP</th>
            <th>ALAMAt</th>
		</tr>
		
		@foreach($pdf as $p)
		<tr>
            <td>{{ $p->id }}</td>
			<td>{{ $p->name }}</td>
            <td>{{ $p->nationality}}</td>
            <td>{{ $p->nik}}</td>
            <td>{{ $p->born_date }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->pendidikan }}</td>
            <td>{{ $p->jurusan }}</td>
            <td>{{ $p->nilai }}</td>
            <td>{{ $p->sekolah }}</td>
            <td>{{ $p->jenis }}</td>
            <td>{{ $p->job }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->phone }}</td>
            <td>{{ $p->address }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
