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
                    <h2 style="font-size: 36px">Tambah Gambar Komik</h2>
                    <h6 style="padding-top: 18px"><a href="?page=komik/index">Kembali</a></h6>
                    <form action="komik/proses_tambah_gambar.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_komik" value="<?=$item['id_komik']?>">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                    <ul>
                        <li>
                                <h6 for="exampleInputPassword1">Foto</h6>
                                <input type="file" name="gambar_komik[]" id="gambar_komik" multiple>   
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

    
   