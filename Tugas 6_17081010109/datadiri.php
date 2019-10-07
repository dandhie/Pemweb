<?php 
  include ('conn.php'); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="grid/960_12_col.css" />
	<title>Data Diri Dandhie Vega P.</title>
	<style>
body {
background-image:url("pemandangan.jpg");
}
</style>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark ">
	  <a class="navbar-brand" href="#">
	    <ul class="navbar-nav">
	    	<li class="nav-item ">
	        <a class="nav-link text-white" style="color:white; font-size:30px" href="<?php echo "form-mhs.php"; ?>">Form Mahasiswa</a>
	      </li>
	    </ul>
	</div>
</a>
</nav>
	<div class="container_12" style="background: white;">
		<div class="grid_12" style="text-align: center; background: white;">
			<h1>BIODATA</h1>
		</div>
		<div class="grid_4" style="background: white;">
		<h1 style="text-align: center;">Sosial Media</h1>
		<a href="https://www.facebook.com/dandhie.p" target="_blank"><img src="Facebook.png" width="100" height="150"></a>
		<a href="https://www.instagram.com/dandhievp/" target="_blank"><img src="instagram.png" width="150" height="150"></a>
		</div>
		<div class="grid_8" style="background: white;">
			<table style="font-size: 12px" border="1" cellspacing="0" cellpadding="5" align="center">
				<?php 
                  $query = "SELECT * FROM datamahasiswa";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
			<tr align="center" bgcolor="#66CC3">
				<td style="width: 155px">DATA DIRI</td>
				<td style="width: 310px">KETERANGAN</td>
				<td>FOTO</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><?php echo $data['Nama'];  ?></td>
				<td rowspan="9" align="center"><img src="dandhie.jpg" width="155" height="250"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><?php echo $data['Jurusan'];  ?></td>
			</tr>
			<tr>
				<td>NPM</td>
				<td><?php echo $data['NPM'];  ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $data['JenisKelamin'];  ?></td>
			</tr>
			<tr>
				<td>Tempat/Tanggal lahir</td>
				<td><?php echo $data['TTL'];  ?></td>
			</tr>
			<tr>
				<td>Perguruan Tinggi</td>
				<td><?php echo $data['PerguruanTinggi'];  ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $data['Alamat'];  ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><?php echo $data['Pekerjaan'];  ?></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><?php echo $data['Hobi'];  ?></td>
			</tr>
			 <td>
                      <a href="<?php echo "update.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
			<?php endwhile ?>
		</table>
		</div>
	</div>
</body>
</html>