<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);

    $sql = "INSERT INTO pelajar (nama, email, program)
            VALUES ('$nama', '$email', '$program')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Pelajar berjaya didaftarkan!');
                window.location='index.php#senarai';
              </script>";
    } else {
        echo "<script>
                alert('Ralat semasa mendaftar pelajar.');
                window.location='index.php#daftar';
              </script>";
    }
}
?>