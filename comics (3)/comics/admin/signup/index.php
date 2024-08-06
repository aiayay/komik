
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px"></h2>
                    <!-- <h6 style="padding-top: 18px"><a href="?page=user/tambah">Tambah Data User</a></h6> -->
                    <div class="auth-wrapper">
                        <div class="auth-content text-center">
                            <div class="card borderless">
                                <form action="admin/signup/proses_signup.php" method="post">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h4 class="mb-3 f-w-400">SIGNUP</h4>
                                                <hr>
                                                <div class="main-buttona text-center">
                                                        <a href="?page=admin/login/index" class="logina">LOGIN</a>
                                                        <a href="?page=signup/index" class="signupa">SIGNUP</a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <p>Isi Email</p>
                                                <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <p>Username</p>
                                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <p>Nama Lengkap</p>
                                                <input type="text" class="form-control" placeholder="Full Name" name="nama_lengkap" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <p>Tanggal Lahir</p>
                                                <input type="date" class="form-control" placeholder="Date of Birth" name="tgl_lahir" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <p>Password</p>
                                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <p>Konfirmasi Password</p>
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" readonly>
                                            </div>
                                            <div class="form-group mb-3">
                                                <p>Nomor Telepon</p>
                                                <input type="number" class="form-control" placeholder="No. Handphone" name="no_hp" readonly>
                                            </div>
                                            <div class="form-group mb-3">
                                                <p>Jenis Kelamin</p>
                                                <h6 class="text-start"><input type="radio" name="jenis_kelamin" value="perempuan" required> Female</h6>
                                                <h6 class="text-start"><input type="radio" name="jenis_kelamin" value="lakilaki" required> Male</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-buttona text-center">
                                        <button type="submit" class="signupa">Signup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
             
              </div>

          </div>
        </div>
      </div>
    </div>

    
   