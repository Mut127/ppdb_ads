<?php
$nisn = $_GET['nisn'];
$query = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE nisn='$nisn'");
$hasil = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title">EDIT DATA CALON SISWA</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form method='post' action='update/update_data.php'>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>NISN</label>
							<input name='nisn' type='number' class="form-control" value='<?php echo $hasil['nisn']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>NO. KK</label>
							<input  name='no.kk' type='text' class="form-control" value='<?php echo $hasil['no_kk']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>NIK</label>
							<input name='nik' type='text' class="form-control" value='<?php echo $hasil['nik']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>NAMA</label>
							<input name='nama' type='text' class="form-control" value='<?php echo $hasil['nama']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>TEMPAT LAHIR</label>
							<input name='tempat_lahir' type='text' class="form-control" value='<?php echo $hasil['tempat_lahir']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>TANGGAL LAHIR</label>
							<input name='tanggal_lahir' type='date'class="form-control" value='<?php echo $hasil['tanggal_lahir']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- textarea -->
                          <div class="form-group">
                          <label>JENIS KELAMIN</label>
                            <select class="form-control" name='jenis_kelamin'>
							<option value="LAKI-LAKI" 
                                <?php 
                                if($hasil['jenis_kelamin']=="LAKI-LAKI"){ echo "selected";}
                                ?>
                                >LAKI-LAKI</option>
                                <option value="PEREMPUAN"
                                <?php 
                                if($hasil['jenis_kelamin']=="PEREMPUAN"){ echo "selected";}
                                ?>

                                >PEREMPUAN</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>AGAMA</label>
							<input type="text" name="agama" class="form-control" value='<?php echo $hasil['agama']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>Alamat</label>
                            <textarea
							name="alamat"
                              class="form-control"
                              rows="3"
                              placeholder="Enter ..."
                            ><?php echo $hasil['alamat']; ?></textarea>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>NAMA AYAH</label>
							<input type="text" name="nama_ayah" class="form-control" value='<?php echo $hasil['nama_ayah']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>NO TELEPON AYAH</label>
							<input type="text" name="telepon_ayah" class="form-control" value='<?php echo $hasil['telepon_ayah']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>PEKERJAAN AYAH</label>
							<input type="text" name="pekerjaan_ayah" class="form-control" value='<?php echo $hasil['pekerjaan_ayah']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>NAMA IBU</label>
							<input type="text" name="nama_ibu" class="form-control" value='<?php echo $hasil['nama_ibu']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>NO TELEPON IBU</label>
							<input type="text" name="telepon_ibu" class="form-control" value='<?php echo $hasil['telepon_ibu']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>PEKERJAAN IBU</label>
							<input type="text" name="pekerjaan_ibu" class="form-control" value='<?php echo $hasil['pekerjaan_ibu']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>ASAL SEKOLAH</label>
							<input type="text" name="asal_sekolah" class="form-control" value='<?php echo $hasil['asal_sekolah']; ?>'>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                          <label>NILAI UJIAN</label>
							<input type="text" name="nilai_ujian" class="form-control" value='<?php echo $hasil['nilai_ujian']; ?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>PILIHAN JURUSAN1 1</label>
                          <select class="form-control" name='pilihan_jurusan1'>
							<option value="IPA" 
                                <?php 
                                if($hasil['pilihan_jurusan1']=="IPA"){ echo "selected";}
                                ?>
                                >IPA</option>
                                <option value="IPS"
                                <?php 
                                if($hasil['pilihan_jurusan1']=="IPS"){ echo "selected";}
                                ?>

                                >IPS</option>
                                <option value="BAHASA" 
                                <?php 
                                if($hasil['pilihan_jurusan1']=="BAHASA"){ echo "selected";}
                                ?>
                                >BAHASA</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>PILIHAN JURUSAN1 2</label>
                          <select class="form-control" name='pilihan_jurusan2'>
							<option value="IPA" 
                                <?php 
                                if($hasil['pilihan_jurusan1']=="IPA"){ echo "selected";}
                                ?>
                                >IPA</option>
                                <option value="IPS"
                                <?php 
                                if($hasil['pilihan_jurusan1']=="IPS"){ echo "selected";}
                                ?>

                                >IPS</option>
                                <option value="BAHASA" 
                                <?php 
                                if($hasil['pilihan_jurusan1']=="BAHASA"){ echo "selected";}
                                ?>
                                >BAHASA</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-sm btn-info">SIMPAN</button>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
    </div>
</section>