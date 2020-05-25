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
	<title>TAMBAH MAHASISWA</title>
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
	<br/>
	<h3 align=center>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table align=center>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>