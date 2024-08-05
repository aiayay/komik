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
                    <form action="komik/proses_tambah.php" method="post" enctype="multipart/form-data">
                  <div class="row">                  
                    <div class="col-lg-15 align-self-center">
                    <ul>
                        <li>
                            <h6 for="">Judul</h6>
                            <input type="text" class="form-control" name="judul" placeholder=" Masukan Judul">
                        </li>
                        <li>
                            <h6 for="">Deskripsi</h6>
                            <input type="text" class="form-control" name="deskripsi" placeholder=" Masukan Deskripsi">
                        </li>
                        <li>
                            <h6 for="exampleInputPassword1">Cover</h6>
                            <input type="file" class="form-control" name="cover">
                        </li>
                        <li>
                      
                                                <h6 for="exampleInputPassword1">Foto</h6>
                                                <input type="file" name="gambar_komik[]" id="gambar_komik" multiple>
                                               
                                    
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

    
   