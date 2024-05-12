<?php
// mengambil id dari parameter
$idgejala=$_GET['idgejala'];

$sql = "DELETE FROM gejala WHERE idgejala='$idgejala'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=gejala");
}
$conn->close();
?>