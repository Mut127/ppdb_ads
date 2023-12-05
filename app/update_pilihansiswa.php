<?php
$upd = $_GET['upd'];
$query = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE nisn='$upd'");
$hasil = mysqli_fetch_array($query);
?>
	 <section class="content">
	<div class="container-fluid">
	<div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">General Elements</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <form method='POST' action='update/update_data.php'>
                      <div class="row">
                        <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Nama Calon Siswa</label>
							<input name='nisn' type='number' class="form-control" value='<?php echo $hasil['nisn']; ?>'>
                          </div>
						    <div class="form-group">
                            <label>Pilihan 1</label>
                            <select name='id_jurusan[]'>
                                <?php
                                $s = "SELECT * FROM jurusan";
                                $q = mysqli_query($conn, $s);
                                while ($row = mysqli_fetch_array($q)) {
                                    echo "<option value='{$row['id_jurusan']}'>{$row['id_jurusan']} - {$row['nama_jurusan']}</option>";
                                }
                                ?>
                            </select>
                          </div>
				            <div class="form-group">
                            <label>Pilihan 2</label>
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
                        </div>
                      </div>
                      <button type="submit" class="btn btn-sm btn-info">SIMPAN</button>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
			</div>
</section>
			
				<?php
			

?>
			
