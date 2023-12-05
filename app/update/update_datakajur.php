<?php
include ('../../conf/koneksi.php');
    $id_kajur = $_POST['id_kajur'];
    $nama_kajur = $_POST['nama_kajur'];
    $pengampu_jurusan = $_POST['pengampu_jurusan'];
    $query = mysqli_query($conn,"UPDATE kajur SET id_kajur='$id_kajur',nama_kajur='$nama_kajur',pengampu_jurusan='$pengampu_jurusan' WHERE id_kajur='$id_kajur'");
    header('Location: ../index.php?page=view_kajur');
?>