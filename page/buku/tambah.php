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
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Pernerbit</label>
                                            <input class="form-control" name="penerbit" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun">
                                                <?php

                                                    $tahun = date("Y");

                                                    for ($i=$tahun-30; $i <=$tahun ; $i++) { 
                                                        echo '

                                                            <option value="'.$i.'">'.$i.'</option>

                                                        ';
                                                    }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" />
                                           
                                        </div>


                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1">Rak 1</option>
                                                <option value="rak2">Rak 2</option>
                                                <option value="rak3">Rak 3</option>
                                                
                                            </select>
                                        </div>

                                <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" />
                                           
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

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $isbn = $_POST['isbn'];
    $jumlah = $_POST['jumlah'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];

    $simpan = $_POST['simpan'];

    if (isset($simpan)) {
        $sql = mysqli_query($con, "INSERT INTO tbl_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah, lokasi, tgl_input) VALUES ('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal')");
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