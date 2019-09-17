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

	<?php
	header("Content-type: application/vnd-pdf");
    header("Content-Disposition: attachment; filename=E-recruitment.pdf");
	?>

	<center>
		<h1>Export Data Ke Document Dengan PHP <br/> www.garudapratama.com</h1>
	</center>

	<table border="1">
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
		<?php
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","web_gdps");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from pdf_form");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
            <td><?php echo $d['id']; ?></td>
			<td><?php echo $d['name']; ?></td>
            <td><?php echo $d['nationality']; ?></td>
            <td><?php echo $d['nik']; ?></td>
            <td><?php echo $d['born_date']; ?></td>
            <td><?php echo $d['umur']; ?></td>
            <td><?php echo $d['pendidikan']; ?></td>
            <td><?php echo $d['jurusan']; ?></td>
            <td><?php echo $d['nilai']; ?></td>
            <td><?php echo $d['sekolah']; ?></td>
            <td><?php echo $d['jenis']; ?></td>
            <td><?php echo $d['job']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['phone']; ?></td>
            <td><?php echo $d['address']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
