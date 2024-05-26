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
    <!-- chosen css -->
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">
    <!-- icon navbar -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Sistem Pakar Diagnosa Penyakit Kulit</a>
        <label for="check" class="checkbox">
            <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?page=users">Users</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?page=gejala">Gejala</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?page=penyakit">Penyakit</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?page=aturan">Basis Aturan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?page=konsultasi">Konsultasi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </nav>
    <!-- Isi Halaman Web -->
    <div class="container mt-2 mb-2">
        <?php

        $page = isset($_GET['page']) ? $_GET['page'] : "";
        $action = isset($_GET['action']) ? $_GET['action'] : "";

        if ($page == "") {
            include "welcome.php";
        } elseif ($page == "gejala") {
            if ($action == "") {
                include "menu_gejala/menampilkan_gejala.php";
            } elseif ($action == "tambah") {
                include "menu_gejala/tambah_gejala.php";
            } elseif ($action == "update") {
                include "menu_gejala/update_gejala.php";
            } else {
                include "menu_gejala/hapus_gejala.php";
            }
        } elseif ($page == "penyakit") {
            if ($action == "") {
                include "menu_penyakit/menampilkan_penyakit.php";
            } elseif ($action == "tambah") {
                include "menu_penyakit/tambah_penyakit.php";
            } elseif ($action == "update") {
                include "menu_penyakit/update_penyakit.php";
            } else {
                include "menu_penyakit/hapus_penyakit.php";
            }
        } elseif ($page == "aturan") {
            if ($action == "") {
                include "basis_aturan/menampilkan_aturan.php";
            } elseif ($action == "tambah") {
                include "basis_aturan/tambah_aturan.php";
            } elseif ($action == "detail") {
                include "basis_aturan/detail_aturan.php";
            } elseif ($action == "update") {
                include "basis_aturan/update_aturan.php";
            } elseif ($action == "hapus_gejala") {
                include "basis_aturan/hapus_detail_aturan.php";
            } else {
                include "basis_aturan/hapus_aturan.php";
            }
        } elseif ($page == "konsultasi") {
            if ($action == "") {
                include "menu_konsultasi/menampilkan_konsultasi.php";
            } else {
                include "menu_konsultasi/hasil_konsultasi.php";
            }
        } elseif ($page == "users") {
            if ($action == "") {
                include "menu_users/menampilkan_users.php";
            } elseif ($action == "tambah") {
                include "menu_users/tambah_users.php";
            } elseif ($action == "update") {
                include "menu_users/update_users.php";
            } else {
                include "menu_users/hapus_users.php";
            }
        } else {
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
        });
    </script>
    <!-- font awesome js -->
    <script src="assets/js/all.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script>
        $(function() {
            $('.chosen').chosen();
        });
    </script>

</body>

</html>