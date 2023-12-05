<?php
include('../../conf/koneksi.php');

if (isset($_POST['insert'])) {
    $nisn = $_POST['nisn'];
    $id_jurusan_1 = $_POST['id_jurusan'][0];
    $id_jurusan_2 = $_POST['id_jurusan'][1];

    $insert_pilihan1 = "INSERT INTO pilihan (id_jurusan, nisn) VALUES ('$id_jurusan_1', '$nisn')";
    $insert_pilihan2 = "INSERT INTO pilihan (id_jurusan, nisn) VALUES ('$id_jurusan_2', '$nisn')";
    
    $query1 = mysqli_query($conn, $insert_pilihan1);
    $query2 = mysqli_query($conn, $insert_pilihan2);

    if ($query1&&$query2) {
        $message = 'Data Berhasil Dimasukkan!';
    } else {
        $message = 'Error inserting data: ' . mysqli_error($conn);
    }

    // Set the message for redirection
    header('Location: ../index.php?page=view_adminpilihan');
}
?>
