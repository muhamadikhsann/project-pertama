<?php error_reporting(E_ALL^(E_NOTICE|E_WARNING));?>

<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="post">
                                        <div class="form-group">
                                            <label>NIS</label>
                                            <input class="form-control" name="nis" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>tempat_lahir</label>
                                            <input class="form-control" name="tempat_lahir" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="l">Laki-Laki</option>
                                                <option value="p">Perempuan</option>
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="kelas" />
                                           
                                        </div>

                                        <div>
                                            
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                </div>

                                </form>
                             </div>
</div>
</div>
</div>



<?php

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];

    $simpan = $_POST['simpan'];

    if (isset($simpan)) {
        $sql = mysqli_query($con, "INSERT INTO tb_siswa (nis, nama, tempat_lahir, tgl_lahirg, jk, kelas) VALUES ('$nis','$nama','$tempat_lahir','$tgl_lahir','$jk','$kelas')");
      /*  $sql = $koneksi->query("insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah, lokasi, tgl_input )value('$judul,'$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal')");*/

        if ($sql) {
            ?>
                <script type="text/javascript">
                    
                alert ("Data Berhasil Disimpan");

                </script>
            <?php
        }
    }
?>