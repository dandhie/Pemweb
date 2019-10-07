<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['NPM'])) {
          //query SQL
          $NPM_upd = $_GET['NPM'];
          $query = "SELECT * FROM datamahasiswa WHERE NPM = '$NPM_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }  
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Nama = $_POST['Nama'];
      $Jurusan = $_POST['Jurusan'];
      $NPM = $_POST['NPM'];
      $JenisKelamin = $_POST['JenisKelamin'];
      $TTL = $_POST['TTL'];
      $PerguruanTinggi= $_POST['PerguruanTinggi'];
      $Alamat = $_POST['Alamat'];
      $Pekerjaan = $_POST['Pekerjaan'];
      $Hobi = $_POST['Hobi'];
      //query SQL
      $sql = "UPDATE biodata SET Nama='$Nama', Jurusan='$Jurusan', NPM='$NPM', JenisKelamin='$JenisKelamin', TTL='$TTL', PerguruanTinggi='$PerguruanTinggi', Alamat ='$Alamat', Pekerjaan='Pekerjaan', Hobi='$Hobi' WHERE NPM='$NPM'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: datadiri.php?status='.$status);
  }
  

?>


<!DOCTYPE html>
 <html>
 <head>

  <title> form </title>

  <link rel="stylesheet" href="aset/css/bootstrap.min.css">
  <link rel="stylesheet" href="aset/css/dashboard.css">
  
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

       <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2 style="margin: 80px 0 30px 0;">Form Data Mahasiswa</h2>
          <form action="update.php" method="POST">
            <?php  
            $data = mysqli_fetch_array($result);
            ?>
            <div class="form-group">
              <input type="hidden" class="form-control" name="isi_id">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="Nama" required="required" value="<?php echo $data['Nama'] ?>">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" class="form-control" placeholder="Jurusan" name="Jurusan" required="required" value="<?php echo $data['Jurusan'] ?>">
            </div>
            <div class="form-group">
              <label>NPM</label>
              <input type="text" class="form-control" placeholder="NPM" name="NPM" required="required" value="<?php echo $data['NPM'] ?>">
            </div>
             <div class="form-group">
              <label>Jenis Kelamin</label>
              <input type="text" class="form-control" placeholder="JenisKelamin" name="JenisKelamin" required="required" value="<?php echo $data['JenisKelamin'] ?>">
            </div>
            <div class="form-group">
              <label>Tempat/Tanggal lahir</label>
              <input type="text" class="form-control" placeholder="TTL" name="TTL" required="required" value="<?php echo $data['TTL'] ?>">
            </div>
            <div class="form-group">
              <label>Perguruan Tinggi</label>
              <input type="text" class="form-control" placeholder="PerguruanTinggi" name="PerguruanTinggi" required="required" value="<?php echo $data['PerguruanTinggi'] ?>">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" placeholder="Alamat" name="Alamat" required="required" value="<?php echo $data['Alamat'] ?>">
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" class="form-control" placeholder="Pekerjaan" name="Pekerjaan" required="required" value="<?php echo $data['Pekerjaan'] ?>">
            </div>
            <div class="form-group">
              <label>Hobi</label>
              <input type="text" class="form-control" placeholder="Hobi" name="Hobi" required="required" value="<?php echo $data['Hobi'] ?>">
            </div>
            
            <button type="submit" class="btn btn-primary" style="margin-bottom: 30px; margin-top: 30px;">Tambah</button>
            
          </form>
        </main>
      </div>
    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

 </body>
 </html>