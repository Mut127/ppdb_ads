<?php
include "koneksi.php";
if(isset($_GET['id_kajur'])){
    $id_kajur = $_GET['id_kajur'];
    if($id_kajur !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from kajur where id_kajur= '$id_kajur' "));
        $hapus_kajur = "delete from kajur where id_kajur= '$id_kajur' ";
        $query = mysqli_query($conn, $hapus_kajur);
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
                <h3 class="card-title">DATA KAJUR</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href='index.php?page=insert_kajur' class="btn btn-info">TAMBAH DATA</a>
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg" >
                  Tambah Data
              </button> -->
              <br></br>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
        <tr>
        <th>No</th>
            <th>Id Kajur</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
       <?php
       $no = 1;
       $sql = "select * from kajur order by id_kajur desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
        <td>$no</td>
        <td>$row[id_kajur]</td>
        <td>$row[nama_kajur]</td>
        <td>$row[pengampu_jurusan]</td>
            <td> <a href='?page=update_kajur&upd=$row[id_kajur]'> Edit </a> &nbsp;
            <a href='?page=view_kajur&id_kajur=$row[id_kajur]'> Hapus </a>
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