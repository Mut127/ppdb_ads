<?php
$upd = $_GET['upd'];
$query = mysqli_query($conn, "SELECT * FROM pilihan WHERE id_pilihan='$upd'");
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
            <form method='POST' action='update/update_datapilihan.php?id_pilihan=<?php echo $hasil['id_pilihan']; ?>'>
                <!-- <form method='POST' action='update/update_datapilihan.php'> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>NISN</label>
                                <input name='nisn' type='number' class="form-control" value='<?php echo $hasil['nisn']; ?>'>
                                <input name='id_pilihan' type='number' class="form-control" value='<?php echo $hasil['id_pilihan']; ?>' hidden>
                            </div>
                            <div class="form-group">
                                <label>Pilihan 1</label>
                                <select name='id_jurusan'>
                                    <?php
                                    $s1 = "SELECT * FROM jurusan";
                                    $q1 = mysqli_query($conn, $s1);

                                    while ($row1 = mysqli_fetch_array($q1)) {
                                        $selected = ($row1['id_jurusan'] == $hasil['id_jurusan']) ? 'selected' : '';
                                        echo "<option value='{$row1['id_jurusan']}' $selected>{$row1['id_jurusan']} - {$row1['nama_jurusan']}</option>";
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
