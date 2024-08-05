<?php



$getid = $_GET['id_gambar'];

$search = mysqli_query($koneksi,"SELECT * FROM tbgambar where id_gambar ='$getid'");
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
                    <h2 style="font-size: 36px">Ubah Gambar</h2>
                    <h6 style="padding-top: 18px"><a href="?page=komik/index">Kembali</a></h6>
                    <form action="komik/proses_ubahgambar.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_gambar" value="<?=$item['id_gambar']?>">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                    <ul>
                        <li>
                            <h6 for="exampleInputPassword1"></h6>
                            <img src="assets/images/komik/<?= $item['gambar_komik'] ?>" width="100px" height="400px">
                            <input type="hidden" name="foto_lama" value="<?= $item['gambar_komik']?>">
                            <input type="file" class="form-control" name="gambar_komik">
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

    
   