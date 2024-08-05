<?php



$getid = $_GET['id_paket'];

$search = mysqli_query($koneksi,"SELECT * FROM paket where id_paket ='$getid'");
$item = mysqli_fetch_array($search);

?>
 <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">DATA PAKET</h2>
                    <h6 style="padding-top: 18px"><a href="?page=paket/tambah">Tambah Data Paket</a></h6>
                    <form action="paket/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_paket" value="<?=$item['id_paket']?>">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                      <ul>
                        <li>
                            <h6 for="">Nama Paket</h6>
                            <input type="text" class="form-control" name="nama_paket" placeholder=" Masukan Nama Paket" value="<?php echo $item ['nama_paket'];?>">
                        </li>
                        <li>
                            <h6 for="">Deskripsi</h6>
                            <input type="text" class="form-control" name="deskripsi" placeholder=" Masukan Deskripsi" value="<?php echo $item ['deskripsi'];?>">
                        </li>
                        <li>
                            <h6 for="">Harga</h6>
                            <input type="number" class="form-control" name="harga" value="<?php echo $item ['harga'];?>">
                        </li>
                        <li>
                            <h6 for="">Hari</h6>
                            <input type="number" class="form-control" name="hari" value="<?php echo $item ['hari'];?>">
                        </li>
                        <li>
                            <h6 for="">Jumlah Komik</h6>
                            <input type="number" class="form-control" name="jumlah_komik" value="<?php echo $item ['jumlah_komik'];?>">
                        </li>
                        <button type="submit" class="btn  btn-primary">Submit</button>
                      </ul>
                    </div>
                  </div>
                </form>
                  </div>
                </div>
             
              </div>

          </div>
        </div>
      </div>
    </div>

    
   