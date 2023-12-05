<?php
$upd = $_GET['upd'];
$query = mysqli_query($conn, "SELECT * FROM jurusan WHERE id_jurusan='$upd'");
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
                  <form method='POST' action='update/update_datajurusan.php'>
                      <div class="row">
                        <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                          <label>ID Jurusan</label>
							            <input name='id_jurusan' type='text' class="form-control" value='<?php echo $hasil['id_jurusan']; ?>'>
                          </div>
                          <div class="form-group">
                            <label>ID Kajur</label>
							<input name='id_kajur' type='text' class="form-control" value='<?php echo $hasil['id_kajur']; ?>'>
                            <!-- <input
                              type="text"
                              class="form-control"
                              placeholder="Enter ..."
                            /> -->
                          </div>
						  <div class="form-group">
                            <label>Nama Jurusan</label>
							<input name='nama_jurusan' type='text' class="form-control" value='<?php echo $hasil['nama_jurusan']; ?>'>
                            <!-- <input
                              type="text"
                              class="form-control"
                              placeholder="Enter ..."
                            /> -->
                          </div>
						  <div class="form-group">
                            <label>Kuota</label>
							<input name='kuota' type='number' class="form-control" value='<?php echo $hasil['kuota']; ?>'>
                            <!-- <input
                              type="text"
                              class="form-control"
                              placeholder="Enter ..."
                            /> -->
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-sm btn-info">SIMPAN</button>
                    </form>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
			</div>
</section>
			
				<?php
			

?>
			
