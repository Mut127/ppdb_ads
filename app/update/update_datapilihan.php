<?php
include ('../../conf/koneksi.php');
$id_pilihan = $_GET['id_pilihan'];
    $nisn = $_POST['nisn'];
    $id_jurusan_1 = $_POST['id_jurusan'];
    //$id_jurusan_2 = $_POST['id_jurusan'][1];

    // Update the data directly
    $update_pilihan1 = "UPDATE pilihan SET id_jurusan = '$id_jurusan_1' WHERE nisn = '$nisn' AND id_pilihan ='$id_pilihan'";
    //$update_pilihan2 = "UPDATE pilihan SET id_jurusan = '$id_jurusan_2' WHERE nisn = '$nisn'";

    $query1 = mysqli_query($conn, $update_pilihan1);
    //$query2 = mysqli_query($conn, $update_pilihan2);

    if ($query1) {
        $message = 'Data Berhasil Diupdate!';
    } else {
        $message = 'Error updating data: ' . mysqli_error($conn);
    }

    // Set the message for redirection
    header('Location: ../index.php?page=view_adminpilihan');
?>
