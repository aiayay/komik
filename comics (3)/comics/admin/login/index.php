<?php
// session_start();

//jika sudah login

if (isset($_SESSION['email'])){
}else{
	if(@$_SESSION["level"]== "admin"){
		$email = $_SESSION["email"];
		header('location:../?page=admin/home/index');
	}
	if (@$_SESSION['level']== "member"){
		$email = $_SESSION["email"];
		header('location:../../?page=home/index');
	}
}


?>
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
                            <div class="auth-content">
                                <div class="card borderless">
                                    <form action="admin/login/proses_login.php" method="post">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <h4 class="mb-3 f-w-400 text-center">Login</h4>
                                                    <hr>  
                                                    <div class="main-buttona text-center">
                                                        <a href="#" class="login">LOGIN</a>
                                                        <a href="?page=admin/signup/index" class="signup">SIGNUP</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <p for="">Email Address</p>
                                                    <input type="text" class="form-control" placeholder="Email Address" name="email">
                                                    <p for="">Password</p>
                                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="main-buttona text-center">
                                            <button type="submit" class="signupa">Login</button>
                                        </div>
                                        <br>
                                        <p class="text-center">Forgot Password? <a href="#">Reset</a></p>
                                        <p class="text-center">Not a Member? <a href="?page=admin/signup/index">Signup Now</a></p>
                                        
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

    
   