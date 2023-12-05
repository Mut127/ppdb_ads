<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $nisn = $_POST['nisn'];
    $no_kk = $_POST['no_kk'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['nama_ayah'];
    $telepon_ayah = $_POST['telepon_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $telepon_ibu = $_POST['telepon_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nilai_ujian = $_POST['nilai_ujian'];
    $insert = "insert into calon_siswa(nisn,no_kk,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat,
    nama_ayah, telepon_ayah, pekerjaan_ayah, nama_ibu, telepon_ibu, pekerjaan_ibu, asal_sekolah,nilai_ujian)
    values('$nisn','$no_kk','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat',
    '$nama_ayah', '$telepon_ayah', '$pekerjaan_ayah', '$nama_ibu', '$telepon_ibu', '$pekerjaan_ibu','$asal_sekolah','$nilai_ujian')";
    $query = mysqli_query($conn,$insert);
    if($query){
        ?>
        <script>
            alert('Terimakasih Sudah Mendaftar!');
            document.location='?page=view_adminsiswa';
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
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action='' name='insert' method='post' enctype='multipart/form-data'>
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
                        <label for="exampleInputNoKK">NO. KK</label>
                        <input
                        type="text" 
                        name="no_kk"
                          class="form-control"
                          id="exampleInputNoKK"
                          placeholder="NO.KK"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNIK">NIK</label>
                        <input 
                        type="text" 
                        name="nik"
                          class="form-control"
                          id="exampleInputNIK"
                          placeholder="NIK"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNama">NAMA</label>
                        <input
                        type="text" 
                        name="nama"
                          class="form-control"
                          id="exampleInputNama"
                          placeholder="NAMA"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTempatlahir">TEMPAT LAHIR</label>
                        <input
                        type="text" 
                        name="tempat_lahir"
                          class="form-control"
                          id="exampleInputTempatlahir"
                          placeholder="tempat lahir"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTTL">TANGGAL LAHIR</label>
                        <input
                        type="date" 
                        name="tanggal_lahir"
                          class="form-control"
                          id="exampleInputTTL"
                          placeholder="tanggal lahir"
                        />
                      </div>
                      <div>
                      <label for="exampleInputJeniskelamin">JENIS KELAMIN</label> <br>
                      <select name= "jenis_kelamin" class="form-select" aria-label="Default select example">
                        <option selected>LAKI-LAKI</option>
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                     </select>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputAgama">AGAMA</label>
                        <input
                        type="text" 
                        name="agama"
                          class="form-control"
                          id="exampleInputAgama"
                          placeholder="agama"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputAlamat">ALAMAT</label>
                        <textarea 
                        name="alamat"  
                        class="form-control"
                          id="exampleInputAlamat"
                          placeholder="alamat">
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNamaAyah">NAMA AYAH</label>
                        <input
                        type="text" 
                        name="nama_ayah"
                          class="form-control"
                          id="exampleInputNamaAyah"
                          placeholder="nama_ayah"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTlpAyah">NO TELEPON AYAH</label>
                        <input
                        type="text" 
                        name="telepon_ayah"
                          class="form-control"
                          id="exampleInputTlpAyah"
                          placeholder="telepon_ayah"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPekerjaanAyah">PEKERJAAN AYAH</label>
                        <input
                        type="text" 
                        name="pekerjaan_ayah"
                          class="form-control"
                          id="exampleInputPekerjaanAyah"
                          placeholder="pekerjaan_ayah"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNamaIbu">NAMA IBU</label>
                        <input
                        type="text" 
                        name="nama_ibu"
                          class="form-control"
                          id="exampleInputNamaIbu"
                          placeholder="nama_ibu"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTlpIbu">NO TELEPON IBU</label>
                        <input
                        type="text" 
                        name="telepon_ibu"
                          class="form-control"
                          id="exampleInputTlpIbu"
                          placeholder="telepon_ibu"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPekerajaanIbu">PEKERJAAN IBU</label>
                        <input
                        type="text" 
                        name="pekerjaan_ibu"
                          class="form-control"
                          id="exampleInputPekerajaanIbu"
                          placeholder="pekerjaan_ibu"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputAsalSekolah">ASAL SEKOLAH</label>
                        <input
                        type="text" 
                        name="asal_sekolah"
                          class="form-control"
                          id="exampleInputAsalSekolah"
                          placeholder="asal_sekolah"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNilai">NILAI UJIAN</label>
                        <input
                        type="text" 
                        name="nilai_ujian"
                          class="form-control"
                          id="exampleInputNilai"
                          placeholder="nilai_ujian"
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

                 