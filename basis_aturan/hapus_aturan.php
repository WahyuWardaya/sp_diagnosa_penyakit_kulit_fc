<?php
// mengambil id dari parameter
$idaturan=$_GET['idpenyakit'];

// hapus basis aturan
$sql = "DELETE FROM basis_aturan WHERE idaturan='$idaturan'";
$conn->query($sql);

// hapus detail basis aturan
$sql = "DELETE FROM detail_basis_aturan WHERE idaturan='$idaturan'";
$conn->query($sql);
$conn->close();

header("Location:?page=aturan");
?>