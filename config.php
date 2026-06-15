<?php
$conn = mysqli_connect("localhost", "root", "", "direktori_pelajar");

if (!$conn) {
    die("Sambungan database gagal: " . mysqli_connect_error());
}
?>