<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['NPM'])) {
          //query SQL
          $NPM_upd = $_GET['NPM'];
          $query = "DELETE FROM datamahasiswa WHERE NPM = '$NPM_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          //redirect ke halaman lain
          header('Location: data-mhs.php?status='.$status);
      }  
  }