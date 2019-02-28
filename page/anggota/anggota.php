<?php 
include "../config/koneksi.php";

if (isset($_GET['hapus'])) {
    $sql = mysqli_query($con, "DELETE FROM tbl_buku WHERE judul= '$_GET[buku]'");
    echo "<script>alert('data berhasil dihapus');document.location.href='?page=buku'</script>";
}
 ?>

<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            $no = 0;
                                            $sql = mysqli_query($con,"SELECT * FROM tb_siswa");
                                            while ($r= mysqli_fetch_array($sql)) {
                                            $no++
                                         ?>

                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $r['nis'];?></td>
                                            <td><?php echo $r['nama'];?></td>
                                            <td><?php echo $r['tempat_lahir'];?></td>
                                            <td><?php echo $r['jk'];?></td>
                                            <td><?php echo $r['kelas'];?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $r['id']; ?>" class="btn btn-info" >Ubah</a>
                                                <a onclick="return confirm('hapus data?')"  href="?page=anggota&hapus&anggota=<?php echo $r['judul'] ?>" class="btn btn-danger" >Hapus</a>


                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>

                                 </div>
                        </div>
                    </div>
                </div>
    </div>