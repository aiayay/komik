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
                    <div class="col-lg-15 col-md-6 align-self-center">
                    <div class="form-group">
                   
                        
                          <img src="assets/images/cover/<?=$item ['cover']?>" width="100px" height="400px">
                            <input type="hidden" name="foto_lama" value="<?= $item['cover']?>">
                            <input type="file" class="form-control" name="cover">
                      </div>
                      </div>
                      <div class="col-lg-15 col-md-6 align-self-center">
                      <div class="form-group">
                            <h6 for="">Judul</h6>
                            <input type="text" class="form-control" name="judul" placeholder=" Masukan Judul" value="<?php echo $item ['judul'];?>">
                        </div>
                        <div class="form-group">
                            <h6 for="">Deskripsi</h6>
                            <textarea name="deskripsi" id="editor" cols="3" rows="13" class="form-control" required><?php echo $item['deskripsi']; ?></textarea>
                        </div>
                       
                  
                  
                     
                          <button type="submit" class="btn btn-success">Submit</button>
                      
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

    
   