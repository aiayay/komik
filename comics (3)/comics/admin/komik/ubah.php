<?php



$getid = $_GET['id_komik'];

$search = mysqli_query($koneksi,"SELECT * FROM komik where id_komik ='$getid'");
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
                    <h2 style="font-size: 36px">Daftar Komik</h2>
                    <h6 style="padding-top: 18px"><a href="?page=komik/index">Kembali</a></h6>
                    <form action="komik/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_komik" value="<?=$item['id_komik']?>">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                    <ul>
                        <li>
                            <h6 for="">Judul</h6>
                            <input type="text" class="form-control" name="judul" placeholder=" Masukan Judul" value="<?php echo $item ['judul'];?>">
                        </li>
                        <li>
                            <h6 for="">Deskripsi</h6>
                            <input type="text" class="form-control" name="deskripsi" placeholder=" Masukan Deskripsi" value="<?php echo $item ['deskripsi'];?>">
                        </li>
                        <li>
                            <h6 for="exampleInputPassword1">Cover</h6>
                            <img src="assets/images/cover/<?=$item ['cover']?>" width="100px">
                            <input type="hidden" name="foto_lama" value="<?= $item['cover']?>">
                            <input type="file" class="form-control" name="cover">
                        </li>
                        <li>
                          <br>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </li>
                             
                          
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

    
   