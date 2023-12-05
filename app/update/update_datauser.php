<?php
include ('../../conf/koneksi.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $query = mysqli_query($conn,"UPDATE tb_user SET id='$id',nama='$nama',username='$username', password='$password', level='$level' WHERE id='$id'");
    header('Location: ../index.php?page=view_user');
?>