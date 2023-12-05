<?php
include "koneksi.php";

if(isset($_GET['id_pilihan'])){
    $id_pilihan = $_GET['id_pilihan'];
    if($id_pilihan != ""){
        $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pilihan WHERE id_pilihan = '$id_pilihan' "));
    }
}
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA PILIHAN JURUSAN</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href='index.php?page=insert_pilihansiswa' class="btn btn-info">TAMBAH DATA</a>
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>ID JURUSAN</th>
                                <th>Jurusan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT pilihan.*, calon_siswa.nisn, jurusan.nama_jurusan
                                    FROM pilihan
                                    INNER JOIN calon_siswa ON pilihan.nisn = calon_siswa.nisn
                                    INNER JOIN jurusan ON pilihan.id_jurusan = jurusan.id_jurusan
                                    ORDER BY pilihan.id_pilihan DESC";
                            $query = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($query)){
                                echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$row[nisn]</td>
                                    <td>$row[id_jurusan]</td>
                                    <td>$row[nama_jurusan]</td>
                                </tr>
                                ";
                                $no++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>
</body>
</html>

<
