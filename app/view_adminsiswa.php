<?php
include "koneksi.php";
if(isset($_GET['nisn'])){
    $nisn = $_GET['nisn'];
    if($nisn !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from calon_siswa where nisn= '$nisn' "));
        $hapus = "delete from calon_siswa where nisn= '$nisn' ";
        $query = mysqli_query($conn, $hapus);
        if($query){
            ?>
            <script>
                alert("Data berhasil dihapus!");
            </script>
            <?php
    }
    }
}
?>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA CALON SISWA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href='index.php?page=insert_adminsiswa' class="btn btn-info">TAMBAH DATA</a>
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg" >
                  Tambah Data
              </button> -->
              <br></br>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
                <tr>
                     <th>No</th>
                     <th>NISN</th>
                     <th>No KK</th>
                     <th>NIK</th>
                     <th>Nama</th>
                     <th>Tempat Lahir</th>
                     <th>Tanggal Lahir</th>
                     <th>Jenis Kelamin</th>
                     <th>Agama</th>
                     <th>Alamat</th>
                     <th>Nama Ayah</th>
                     <th>No.Telepon Ayah</th>
                     <th>Pekerjaan Ayah</th>
                     <th>Nama Ibu</th>
                     <th>No.Telepon Ibu</th>
                     <th>Pekerjaan Ibu</th>
                     <th>Asal Sekolah</th>
                     <th>Nilai Ujian</th>
                     <th>Aksi</th>
                </tr>
        </thead>
        <tbody>
       <?php
       $no = 1;
       $sql = "select * from calon_siswa order by nilai_ujian desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
        <td>$no</td>
        <td>$row[nisn]</td>
        <td>$row[no_kk]</td>
        <td>$row[nik]</td>
        <td>$row[nama]</td>
        <td>$row[tempat_lahir]</td>
        <td>$row[tanggal_lahir]</td>
        <td>$row[jenis_kelamin]</td>
        <td>$row[agama]</td>
        <td>$row[alamat]</td>
        <td>$row[nama_ayah]</td>
        <td>$row[telepon_ayah]</td>
        <td>$row[pekerjaan_ayah]</td>
        <td>$row[nama_ibu]</td>
        <td>$row[telepon_ibu]</td>
        <td>$row[pekerjaan_ibu]</td>
        <td>$row[asal_sekolah]</td>
        <td>$row[nilai_ujian]</td>
            <td> <a href='?page=update_adminsiswa&upd=$row[nisn]'> Edit </a> &nbsp;
            <a href='?page=view_adminsiswa&nisn=$row[nisn]'> Hapus </a>
            </td>

        </tr>
        ";
        $no++;
       }
       ?>
       </tbody>
    </table>
    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>

</body>
</html>