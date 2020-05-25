<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Verayanti School</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<title>EDIT</title>
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
  <a class="navbar-brand" href="index.php">KEMBALI</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  </div>  
</nav>
<!-- menu -->
	<h3 align=center>EDIT DATA MAHASISWA</h3>

	<?php
	include 'config.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table align=center>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>