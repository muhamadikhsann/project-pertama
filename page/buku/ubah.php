<?php 
class oop {


    function ubah($con, $table, array $field, $where, $redirect) {

        $sql = "UPDATE $table SET";
        foreach ($field as $key => $value) {
            $sql.=" $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $sql.="WHERE $where";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('success');document.location.href='$redirect'</script>";
        } else {
            echo $sql;
        }
    }
}
 ?>

<?php

    @session_start();

    include '../config/koneksi.php';

	$id = $_GET['id'];

	$sql = mysqli_query($con, "SELECT * FROM tbl_buku WHERE id='$id'");

	$tampil = mysqli_fetch_array($sql);

	$tahun = $tampil['tahun_terbit'];

	$lokasi = $tampil['lokasi'];

    $perintah = new oop();
    @$table = "tbl_buku";
    @$field = array('judul' => $_POST['judul'], 'pengarang' => $_POST['pengarang'], 'penerbit' => $_POST['penerbit'], 'isbn' => $_POST['isbn'], 'jumlah' => $_POST['jumlah'], 'lokasi' => $_POST['lokasi']);
    @$where = "id = $_GET[id]";
    @$redirect = "?page=buku";

    if (isset($_POST['ubah'])) {
          echo $perintah->ubah($con, $table, $field, $where , $redirect);
      }  
?>

<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="post">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" value="<?php  echo $tampil['judul'];?>" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php  echo $tampil['pengarang'];?>" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Pernerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php  echo $tampil['penerbit'];?>" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <br>
                                            <td><?php echo $tampil['tahun_terbit'] ?></td>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" value="<?php  echo $tampil['isbn'];?>" />
                                           
                                        </div>


                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php  echo $tampil['jumlah'];?>" />
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1" <?php if ($lokasi=='rak1') {echo "selected";} ?>>Rak 1</option>
                                                <option value="rak2" <?php if ($lokasi=='rak2') {echo "selected";} ?>>Rak 2</option>
                                                <option value="rak3" <?php if ($lokasi=='rak3') {echo "selected";} ?>>Rak 3</option>
                                                
                                            </select>
                                        </div>

                                <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <br>
                                            <td ><?php echo $tampil['tgl_input'] ?></td>
                                           
                                        </div>


                                        <div>
                                            
                                            <input type="submit" name="ubah" value="ubah" class="btn btn-primary">
                                        </div>
                                </div>

                                </form>
                             </div>
</div>
</div>
</div>

