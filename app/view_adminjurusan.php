<?php
include "koneksi.php";
if(isset($_GET['id_jurusan'])){
    $id_jurusan = $_GET['id_jurusan'];
    if($id_jurusan !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from jurusan where id_jurusan= '$id_jurusan' "));
        $hapus = "delete from jurusan where id_jurusan= '$id_jurusan' ";
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
    $sql = "SELECT pelayanan.pelayananID, pengguna.nama_pengguna AS penanggung_jawab, pelayanan.nama_pelayanan, pelayanan.deskripsi FROM pelayanan INNER JOIN pengguna ON pelayanan.penggunaID = pengguna.penggunaID";
    $query = mysqli_query($conn,$sql);

?>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA JURUSAN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href='index.php?page=insert_adminjurusan'  class="btn btn-info">TAMBAH DATA</a>
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg" >
                  Tambah Data
              </button> -->
              <br></br>
    <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>No</th>
            <th>ID Jurusan</th>
            <th>ID Kajur</th>
            <th>Nama Jurusan</th>
            <th>Kuota</th>
            <th>Aksi</th>
    </tr>
        </thead>
        <tbody>
       <?php
       $no = 1;
       $sql = "select * from jurusan order by id_jurusan desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[id_jurusan]</td>
            <td>$row[id_kajur]</td>
            <td>$row[nama_jurusan]</td>
            <td>$row[kuota]</td>
            <td> <a href='?page=update_adminjurusan&upd=$row[id_jurusan]'> Edit </a> &nbsp;
            
            <a href='?page=view_adminjurusan&id_jurusan=$row[id_jurusan]'> Hapus </a>
            </td>
        </tr>
        ";
        $no++;
       }
       ?>
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