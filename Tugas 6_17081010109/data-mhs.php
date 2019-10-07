<?php 
  include ('conn.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
  	<title> Data mahasiswa </title>
  	<link href="aset/css/bootstrap.min.css" rel="stylesheet">
    <link href="aset/css/dashboard.css" rel="stylesheet">
 </head>

 <body>
 	 <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark text-white">
      <p style="font-size: 20px; margin-left: 20px;"> Tugas pemweb 5</p>
  </nav>

  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:50px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "datadiri.php"; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "data-mhs.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form-mhs.php"; ?>">Tambah Data Mahasiswa</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-8 ml-sm-auto col-lg-10 px-2">

        <h2 style="margin: 80px 0 30px 0;">Data Mahasiswa</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm ">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>NPM</th>
                  <th>Jenis Kelamin</th>
                  <th>TTL</th>
                  <th>Perguruan Tinggi</th>
                  <th>Alamat</th>
                  <th>Pekerjaan</th>
                  <th>Hobi</th>
                </tr>
              </thead>
              
              <tbody>
                <?php 
                  $query = "SELECT * FROM datamahasiswa";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['Nama'];  ?></td>
                    <td><?php echo $data['Jurusan'];  ?></td>
                    <td><?php echo $data['NPM'];  ?></td>
                    <td><?php echo $data['JenisKelamin'];  ?></td>
                    <td><?php echo $data['TTL'];  ?></td>
                    <td><?php echo $data['PerguruanTinggi'];  ?></td>
                    <td><?php echo $data['Alamat'];  ?></td>
                    <td><?php echo $data['Pekerjaan'];  ?></td>
                    <td><?php echo $data['Hobi'];  ?></td>
                    <td>
                      <a href="<?php echo "update.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>

              </tbody>
            </table>

          </div>
        </main>
      </div>
    </div>

    <script src="aset/js/jquery.js"></script>
    <script src="aset/js/bootstrap.js"></script>
  </body>
</html>


 </body>
