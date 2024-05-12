<?php
// koneksi data base
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Penyakit Kulit</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- data table css -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Sistem Pakar Diagnosa Penyakit Kulit</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="?page=gejala">Gejala</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="?page=penyakit">Penyakit</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Basis Aturan</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Konsultasi</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Logout</a>
    </li>
  </ul>
</nav>
<!-- Isi Halaman Web -->
<div class="container mt-2">
<?php

$page = isset($_GET['page']) ? $_GET['page'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

if ($page==""){
    include "welcome.php";
}elseif ($page=="gejala"){
    if ($action==""){
        include "menampilkan_gejala.php";
    }elseif ($action=="tambah"){
        include "tambah_gejala.php";
    }elseif ($action=="update"){
        include "update_gejala.php";
    }else{
        include "hapus_gejala.php";
    }
  }elseif ($page=="penyakit"){
    if ($action==""){
        include "menampilkan_penyakit.php";
    }elseif ($action=="tambah"){
        include "tambah_penyakit.php";
    }elseif ($action=="update"){
        include "update_penyakit.php";
    }else{
        include "hapus_penyakit.php";
    }
}else{
    include "NAMA_HALAMAN";
}
?>
</div>

<!-- jquery -->
<script src="assets/js/jquery-3.7.0.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- data tables js -->
<script src="assets/js/datatables.min.js"></script>
<script>
      $(document).ready(function() {
            $('#myTable').DataTable();
      } );
  </script>
  <!-- font awesome js -->
  <script src="assets/js/all.js"></script>
</body>
</html>