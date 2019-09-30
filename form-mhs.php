<?php 
	include ('conn.php');

	$status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Nama = $_POST['Nama'];
      $Jurusan = $_POST['Jurusan'];
      $Jenjang = $_POST['Jenjang'];
      $JenisKelamin = $_POST['JenisKelamin'];
      $TTL = $_POST['TTL'];
      $PerguruanTinggi= $_POST['PerguruanTinggi'];
      $Alamat = $_POST['Alamat'];
      $Pekerjaan = $_POST['Pekerjaan'];
      $Hobi = $_POST['Hobi'];
      //query SQL
      $query = "INSERT INTO datadiri (Nama, Jurusan, Jenjang, JenisKelamin, TTL, PerguruanTinggi, Alamat, Pekerjaan, Hobi) VALUES('$Nama','$Jurusan','$Jenjang', '$JenisKelamin','$TTL','$PerguruanTinggi','$Alamat','$Pekerjaan','$Hobi')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
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
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?>


    <h2 style="margin: 80px 0 30px 0;">Form Data Mahasiswa</h2>
          <form action="form-mhs.php" method="POST">
            
            <div class="form-group">
              <input type="hidden" class="form-control" name="isi_id">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="Nama" required="required">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" class="form-control" placeholder="Jurusan" name="Jurusan" required="required">
            </div>
            <div class="form-group">
              <label>Jenjang</label>
              <input type="text" class="form-control" placeholder="Jenjang" name="Jenjang" required="required">
            </div>
             <div class="form-group">
              <label>Jenis Kelamin</label>
              <input type="text" class="form-control" placeholder="JenisKelamin" name="JenisKelamin" required="required">
            </div>
            <div class="form-group">
              <label>Tempat/Tanggal lahir</label>
              <input type="text" class="form-control" placeholder="TTL" name="TTL" required="required">
            </div>
            <div class="form-group">
              <label>Perguruan Tinggi</label>
              <input type="text" class="form-control" placeholder="PerguruanTinggi" name="PerguruanTinggi" required="required">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" placeholder="Alamat" name="Alamat" required="required">
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" class="form-control" placeholder="Pekerjaan" name="Pekerjaan" required="required">
            </div>
            <div class="form-group">
              <label>Hobi</label>
              <input type="text" class="form-control" placeholder="Hobi" name="Hobi" required="required">
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
