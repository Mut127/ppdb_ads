
<?php
$upd = $_GET['upd'];
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE id='$upd'");
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
                  <form method='POST' action='update/update_datauser.php'>
                      <div class="row">
                        <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                          <label>ID</label>
							<input name='id' type='number' class="form-control" value='<?php echo $hasil['id']; ?>'>
</div>
              <div class="form-group">
    
              <label>Nama</label>
							<input name='nama' type='text' class="form-control" value='<?php echo $hasil['nama']; ?>'>
                            <!-- <input
                              type="text"
                              class="form-control"
                              placeholder="Enter ..."
                            /> -->
                          </div>
						  <div class="form-group">
                            <label>Username</label>
							<input name='username' type='username' class="form-control" value='<?php echo $hasil['username']; ?>'>
                            <!-- <input
                              type="text"
                              class="form-control"
                              placeholder="Enter ..."
                            /> -->
                          </div>
						  <div class="form-group">
                            <label>Password</label>
							<input name='password' type='password' class="form-control" value='<?php echo $hasil['password']; ?>'>
                            <!-- <input
                              type="text"
                              class="form-control"
                              placeholder="Enter ..."
                            /> -->
                          </div>

						  <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name='level'>
							<option value="admin" 
						<?php 
						if($hasil['level']=="admin"){ echo "selected";}
						?>
						>admin</option>
						<option value="siswa"
						<?php 
						if($hasil['level']=="siswa"){ echo "selected";}
						?>
						>siswa</option>
                            </select>
                          </div>
                        </div>
                      </div>
					  <input type='submit' name='update' value='Update Data'>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
			</div>
</section>
			
				<?php
			

?>
			
