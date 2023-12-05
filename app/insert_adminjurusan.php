<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id_jurusan = $_POST['id_jurusan'];
    $id_kajur = $_POST['id_kajur'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $kuota = $_POST['kuota'];
    $insert = "insert into jurusan(id_jurusan, id_kajur, nama_jurusan, kuota)
    values('$id_jurusan','$id_kajur','$nama_jurusan','$kuota')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data Telah Ditambahkan');
            document.location='?page=view_adminjurusan';
        </script>
        <?php
    }
}
?>
<html>
<head>
</head>
<body>
    <!-- Main content -->
    <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">MASUKAN DATA ANDA</h3>
                  </div>
                  <form action='' name='insert' method='post' enctype='multipart/form-data'>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputIdJurusan">ID Jurusan</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        name="id_jurusan"
                        id="exampleInputIdJurusan"
                        placeholder="Id Jurusan"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputIdKajur ">ID Kajur</label>
                        <input
                        type="text" 
                        name="id_kajur"
                          class="form-control"
                          id="exampleInputIdKajur"
                          placeholder="ID Kajur"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNIK">Nama Jurusan</label>
                        <input 
                        type="text" 
                        name="nama_jurusan"
                          class="form-control"
                          id="exampleInputNamaJurusan"
                          placeholder="Nama Jurusan"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputKuota">Kuota</label>
                        <input
                        type="number" 
                        name="kuota"
                          class="form-control"
                          id="exampleInputKuota"
                          placeholder="Kuota"
                        />
                      </div>
                      <input type="submit" name="input" value='DAFTAR' class="btn btn-sm btn-info" />  
                    </div>
                    <!--/.card-body -->
                    
                </div>
                <!-- /.card -->
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        bsCustomFileInput.init();
      });
    </script>
  </body>
</html>
<!-- 
        <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Id Jurusan</td>
        <td>
            <input type="text" name="id_jurusan" required />
        </td>
    </tr>
    <tr>
        <td>Id Kajur</td>
        <td>
            <input type="text" name="id_kajur" required />
        </td>
       
    </tr>
    <tr>
        <td>Nama Jurusan</td>
        <td>
            <input type="text" name="nama_jurusan" required />
        </td>
        
    </tr>
    <tr>
        <td>Kuota</td>
        <td>
            <input type="number" name="kuota" required />
        </td>
        
    </tr>
   <tr>
        <td></td>
        <td> 
            <input type="submit" name="input" value='DAFTAR' />
        </td>
   </tr>
</table>
</form>
</body>
</html> -->