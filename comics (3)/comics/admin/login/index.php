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
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <div class="card borderless">
            <form action="admin/login/proses_login.php" method="post">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Login</h4>
                            <hr>
                            <div class="button-container mb-3">
                                <div class="button login"><a href="?page=login/index">LOGIN</a></div>
                                <div class="button signup"><a href="?page=signup/index">SIGNUP</a></div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <h6 for="">Email Address</h6>
                            <input type="text" class="form-control" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <h6 for="">Password</h6>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                </div>
                <div class="main-button text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->
