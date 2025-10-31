<!DOCTYPE html>
<html>
<head>
	<title>KEAMANAN SISTEM</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<h1>KEAMANAN SISTEM</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA MAHASISWA <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><p align=center>No</p></th>
							<th><p align=center>Nama Mahasiswa</p></th>
							<th><p align=center>NIM</p></th>
							<th><p align=center>Alamat</p></th>
							<th><p align=center>Gambar</p></th>
							<th><p align=center>Aksi</p></th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from mahasiswa") or die(mysqli_error($koneksi));
							//script untuk menampilkan data barang

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama']; //untuk menampilkan nama ?></td>
						<td><?= $row['nim']; ?></td>
						<td><?= $row['alamat']; ?></td>
						<td align="center"><?="<img src='img/".$row['gambar']."'style='width:80px; height:100px;'>"?>
						</td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
                <div><a href="login.php">Logout</a></div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>