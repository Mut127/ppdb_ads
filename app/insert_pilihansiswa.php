<?php
include('../conf/koneksi.php');
?>

  <!-- Main content -->
  <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">MASUKAN PILIHAN</h3>
                  </div>
                  <form name='formulir' method='post' action='insert/insert_pilihan.php'>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputNISN">NISN</label>
                        <input 
                        type="number" 
                        class="form-control" 
                        name="nisn"
                        id="exampleInputNISN"
                        placeholder="NISN"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJurusan1">Jurusan 1</label>
                        <select name='id_jurusan[0]'>
                            <?php
                            $s1 = "SELECT * FROM jurusan";
                            $q1 = mysqli_query($conn, $s1);

                            while ($row1 = mysqli_fetch_array($q1)) {
                                echo "<option value='{$row1['id_jurusan']}'>{$row1['id_jurusan']} - {$row1['nama_jurusan']}</option>";
                            }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJurusan2">JURUSAN 2</label>
                        <select name='id_jurusan[1]'>
                            <?php
                            $s2 = "SELECT * FROM jurusan";
                            $q2 = mysqli_query($conn, $s2);

                            while ($row2 = mysqli_fetch_array($q2)) {
                                echo "<option value='{$row2['id_jurusan']}'>{$row2['id_jurusan']} - {$row2['nama_jurusan']}</option>";
                            }
                            ?>
                        </select>
                      </div>
                      <input type="submit" name="insert" value='DAFTAR' class="btn btn-sm btn-info"/>  
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

