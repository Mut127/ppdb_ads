<?php
$upd = $_GET['upd'];
$query = mysqli_query($conn, "SELECT * FROM kajur WHERE id_kajur='$upd'");
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
                  <form method='POST' action='update/update_datakajur.php'>
                      <div class="row">
                        <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                            <label>ID Kajur</label>
							              <input name='id_kajur' type='text' class="form-control" value='<?php echo $hasil['id_kajur']; ?>'>
                          </div>
						              <div class="form-group">
                            <label>Nama</label>
							              <input name='nama_kajur' type='text' class="form-control" value='<?php echo $hasil['nama_kajur']; ?>'> 
                          </div>
				                  <div class="form-group">
                            <label>Jurusan</label>
							              <input name='pengampu_jurusan' type='text' class="form-control" value='<?php echo $hasil['pengampu_jurusan']; ?>'>
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
			
                 

