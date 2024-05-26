<?php
// mengambil id dari parameter
$iduser = $_GET['idpenyakit'];

$sql = "DELETE FROM users WHERE iduser='$iduser'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=users");
}
$conn->close();
