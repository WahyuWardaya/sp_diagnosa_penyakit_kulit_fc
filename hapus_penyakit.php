<?php
// mengambil id dari parameter
$idpenyakit=$_GET['idpenyakit'];

$sql = "DELETE FROM penyakit WHERE idpenyakit='$idpenyakit'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=penyakit");
}
$conn->close();
?>