<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $insert = "insert into tb_user(nama, username, password, level)
    values('$nama','$username','$password','$level')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Data Telah Ditambahkan');
            document.location='?page=view_user';
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
    <!-- <h1>Tambah User</h1>
        <form action='<?php $_SERVER['PHP_SELF']; ?>' name='insert' method='post' enctype='multipart/form-data'>
<table>
    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama" required />
        </td>
    </tr>
    <tr>
        <td>Username</td>
        <td>
            <input type="text" name="username" required />
        </td>
       
    </tr>
    <tr>
        <td>Password</td>
        <td>
            <input type="password" name="password" required />
        </td>
        
    </tr>
    <tr>
    <td>Level</td>
        <td>
        <select name="level">
                <option value="admin">admin</option>
                <option value="admin">admin</option>
        </select>
        </td>
    </tr>
   <tr>
        <td></td>
        <td> 
            <input type="submit" name="input" value='DAFTAR' /></td>
   </tr>
</table>
</form>
</body>
</html> -->
<form action='' name='insert' method='post' enctype='multipart/form-data'>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputNamaUser">Nama</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        name="nama"
                        id="exampleInputNamaUser"
                        placeholder="nama"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input
                        type="text" 
                        name="username"
                          class="form-control"
                          id="exampleInputUsername"
                          placeholder="username"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input 
                        type="password" 
                        name="password"
                          class="form-control"
                          id="exampleInputPassword"
                          placeholder="password"
                        />
                      </div>
                      <div>
                      <label for="exampleInputLevel">Level</label> <br>
                      <select name="level" class="form-select" aria-label="Default select example">
                        <option value="admin">admin</option>
                        <option value="siswa">siswa</option>
                     </select>
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

                 

