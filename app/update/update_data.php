<?php
include ('../../conf/koneksi.php');
    $nisn = $_POST['nisn'];
    $no_kk = $_POST['no_kk'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['nama_ayah'];
    $telepon_ayah = $_POST['telepon_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $telepon_ibu = $_POST['telepon_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nilai_ujian = $_POST['nilai_ujian'];
    $pilihan_jurusan1 = $_POST['pilihan_jurusan1'];
    $pilihan_jurusan2 = $_POST['pilihan_jurusan2'];
    $query = mysqli_query($conn,"UPDATE calon_siswa SET nisn='$nisn',no_kk='$no_kk',nik='$nik', nama='$nama',
    tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin',
     agama='$agama', alamat='$alamat', nama_ayah='$nama_ayah', telepon_ayah='$telepon_ayah', 
     pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu', telepon_ibu='$telepon_ibu', 
     pekerjaan_ibu='$pekerjaan_ibu',asal_sekolah='$asal_sekolah', nilai_ujian='$nilai_ujian',
    pilihan_jurusan1='$pilihan_jurusan1',pilihan_jurusan2='$pilihan_jurusan2' WHERE nisn='$nisn'");
    header('Location: ../index.php?page=view_adminsiswa');
?>