<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosa Penyakit Kulit</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Sistem Pakar Diagnosa Penyakit Kulit</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Gejala</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Penyakit</a>
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
<div class="container">
<?php

$page = isset($_GET['page']) ? $_GET['page'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

if ($page==""){
    include "NAMA_HALAMAN";
}elseif ($page=="NAMA_PAGE"){
    if ($action==""){
        include "NAMA_HALAMAN";
    }elseif ($action=="NAMA_ACTION"){
        include "NAMA_HALAMAN";
    }elseif ($action=="NAMA_ACTION"){
        include "NAMA_HALAMAN";
    }else{
        include "NAMA_HALAMAN";
    }
}else{
    include "NAMA_HALAMAN";
}
?>
</div>

<!-- jquery -->
<link rel="stylesheet" href="assets/js/jquery-3.7.0.min.js">
<!-- bootstrap js -->
<link rel="stylesheet" href="assets/js/bootstrap.min.js">
</body>
</html>