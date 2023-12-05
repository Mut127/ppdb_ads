<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id_kajur = $_POST['id_kajur'];
    $nama_kajur = $_POST['nama_kajur'];
    $pengampu_jurusan = $_POST['pengampu_jurusan'];
    $insert = "insert into kajur(id_kajur, nama_kajur, pengampu_jurusan)
    values('$id_kajur','$nama_kajur','$pengampu_jurusan')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data Telah Ditambahkan');
            document.location='?page=view_kajur';
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
                    <h3 class="card-title">MASUKAN DATA KAJUR</h3>
                  </div>
                  <form action='' name='insert' method='post' enctype='multipart/form-data'>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputID">ID KAJUR</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        name="id_kajur"
                        id="exampleInputID"
                        placeholder="ID KAJUR"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNamaKajur">NAMA</label>
                        <input
                        type="text" 
                        name="nama_kajur"
                          class="form-control"
                          id="exampleInputNamaKajur"
                          placeholder="NAMA"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJurusan">JURUSAN</label>
                        <input 
                        type="text" 
                        name="pengampu_jurusan"
                          class="form-control"
                          id="exampleInputJurusan"
                          placeholder="pengampu_jurusan"
                        />
                      </div>
                      <input type="submit" name="input" value='DAFTAR' class="btn btn-sm btn-info"/>  
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

                 
