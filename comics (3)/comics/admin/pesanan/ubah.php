<?php



$getid = $_GET['id_pesanan'];

$search = mysqli_query($koneksi,"SELECT * FROM pesanan where id_pesanan ='$getid'");
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
                    <h2 style="font-size: 36px">Daftar Pesanan</h2>
                    <h6 style="padding-top: 18px"><a href="?page=pesanan/index">Kembali</a></h6>
                    <form action="pesanan/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_pesanan" value="<?=$item['id_pesanan']?>">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                    <ul>
                    <h6 for="">Status Pesanna</h6>
                                        <select name="status" id="">
                                            <option value="pending" <?= $item['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                            <option value="diterima" <?= $item['status'] == 'diterima' ? 'selected' : '' ?>>Diterima</option>
                                            <option value="konfirmasi" <?= $item['status'] == 'konfirmasi' ? 'selected' : '' ?>>Konformasi</option>
                                            <option value="ditolak" <?= $item['status'] == 'ditolak' ? 'selected' : '' ?>>Ditolak</option>
                                        </select>
                        <!-- <li>
                      
                                                <h6 for="exampleInputPassword1">Foto</h6>
                                                <input type="file" name="gambar_pesanan[]" id="gambar_pesanan" multiple>
                                               
                                    
                        </li> -->
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

    
   