<!DOCTYPE html>
<html>
<head>
	<title>Verayanti School</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- header -->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Verayanti's University</h1>
  <p>NPM xxxxxxxxx</p> 
</div>
<!-- header -->

<!-- menu -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="data-input.php">Tambah Mahasiswa</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="data-input.php">Tambah Mahasiswa</a>
      </li>
    </ul> -->
  </div>  
</nav>
<!-- menu -->
<br/>
<h1 align="center">Data Mahasiswa</h1>
	<table class="table">
		<tr>
        <thead class="thead-light">
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
        </thead>
		</tr>
        <tbody>
		<?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
                    <!-- <button type="button" class="btn btn-danger" href="edit.php?id=<?php echo $d['id']; ?>" >EDIT</button> -->
					<a href="edit.php?id=<?php echo $d['id']; ?>"><button class="btn btn-primary" type="button">EDIT</button></a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="btn btn-danger" type="button">HAPUS</button></a>
				</td>
			</tr>
			<?php 
		}
		?>
        </tbody>
	</table>
</body>
</html>