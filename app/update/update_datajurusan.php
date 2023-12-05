<?php
include ('../../conf/koneksi.php');
    $id_jurusan = $_POST['id_jurusan'];
    $id_kajur = $_POST['id_kajur'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $kuota = $_POST['kuota'];
    $query = mysqli_query($conn,"UPDATE jurusan SET id_jurusan='$id_jurusan',id_kajur='$id_kajur',nama_jurusan='$nama_jurusan', kuota='$kuota' WHERE id_jurusan='$id_jurusan'");
    header('Location: ../index.php?page=view_adminjurusan');
?>