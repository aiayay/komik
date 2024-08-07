    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">DATA USER</h2>
                    <h6 style="padding-top: 18px"><a href="?page=user/tambah"></a></h6>
                    <form action="user/proses_tambah.php" method="post" enctype="multipart/form-data">
                  <div class="row">                  
                    <div class="col-lg-15 col-md-6 align-self-center">
                      <div class="form-group">
                          <h6 for="">Username</h6>
                          <input type="text" class="form-control" name="username" placeholder=" Masukan Username">
                      </div>
                      <div class="form-group">
                          <h6 for="">Password</h6>
                          <input type="text" class="form-control" name="password" placeholder=" Masukan Password">
                      </div>
                      <div class="form-group">
                          <h6 for="">Konfirmasi Password</h6>
                          <input type="text" class="form-control" name="confirm_password" placeholder=" Masukan Password">
                      </div>
                      <div class="form-group">
                          <h6 for="jenis_kelamin">Level</h6>
                          <select name="level" id="" class="form-control">
                                                    <option value="">Pilih Level</option>
                                                    <option value="admin">admin</option>
                                                    <option value="member">member</option>
                                                </select>
                      </div>
                   
                      <div class="form-group">
                          <h6 for="jenis_kelamin">Jenis Kelamin</h6>
                                
                                <h6><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</h6>
                          <h6><input type="radio" name="jenis_kelamin" value="lakilaki">Laki-laki</h6>
                      </div>
                   
                     
                     
                    </div>
                    <div class="col-lg-15 col-md-6 align-self-center">
                    <div class="form-group">
                          <h6 for="">Nama Lengkap</h6>
                          <input type="text" class="form-control" name="nama_lengkap" placeholder=" Masukan Nama Lengkap">
                      </div>
                      <div class="form-group">
                          <h6 for="">Nomor Telepon</h6>
                          <input type="number" class="form-control" name="no_hp">
                      </div>
                      <div class="form-group">
                          <h6 for="">Email</h6>
                          <input type="email" class="form-control" name="email" placeholder=" Masukan email">
                      </div>
                    
                      <div class="form-group">
                          <h6 for="">Tanggal Lahir</h6>
                          <input type="date" class="form-control" name="tgl_lahir">
                      </div>
                      <div class="form-group">
                          <h6 for="">Foto</h6>
                          <input type="file" class="form-control" name="foto">
                      </div>
                  </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
                  </div>
                </div>
             
              </div>

          </div>
        </div>
      </div>
    </div>

    
   