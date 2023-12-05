<?php
include "koneksi.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id !=""){
        $row = mysqli_fetch_array(mysqli_query($conn,"select * from tb_user where id= '$id' "));
        $hapus_user = "delete from tb_user where id= '$id' ";
        $query = mysqli_query($conn, $hapus_user);
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
                <h3 class="card-title">DATA USER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href='index.php?page=insert_user' class="btn btn-info" >TAMBAH DATA</a>
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg" >
                  Tambah Data
              </button> -->
              <br></br>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
       <?php
       $no = 1;
       $sql = "select * from tb_user order by id desc ";
       $query = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_array($query)){
        echo "
        <tr >
            <td>$no</td>
            <td>$row[id]</td>
            <td>$row[username]</td>
            <td>$row[password]</td>
            <td>$row[level]</td>
            <td> <a href='?page=update_user&upd=$row[id]'> Edit </a> &nbsp;
            <a href='?page=view_user&id=$row[id]'> Hapus </a>
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