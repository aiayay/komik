<?php



$getid = $_GET['id_komik'];

$search = mysqli_query($koneksi,"SELECT * FROM komik where id_komik ='$getid'");
$item = mysqli_fetch_array($search);

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-text">
                            <h2 style="font-size: 36px">DETAIL KOMIK</h2>
                            <h6 style="padding-top: 18px"><a href="?page=komik/index">Kembali</a></h6>
                            <table class="table table-striped custom-table" style="color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $komik = mysqli_query($koneksi, "SELECT * FROM tbgambar WHERE id_komik ='$getid' ORDER BY id_gambar DESC");
                                    while ($item = mysqli_fetch_array($komik)) {
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><img src="assets/images/komik/<?= $item['gambar_komik'] ?>" width="50px" height="150px"></td>
                                        <td><a href="?page=komik/ubah_gambar&id_gambar=<?php echo $item["id_gambar"];?>" class="btn btn-success">Ubah</a><br><br>
                                            <a onclick="return confirm('yakin mau dihapus?')" href="komik/hapus_detail.php?id_gambar=<?php echo $item['id_gambar']; ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>