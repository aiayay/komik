<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <div class="card borderless">
            <form action="admin/signup/proses_signup.php" method="post">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Signup</h4>
                            <hr>
                            <div class="button-container mb-3">
                                <div class="button login"><a href="?page=login/index">LOGIN</a></div>
                                <div class="button signup"><a href="?page=admin/signup/index">SIGNUP</a></div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" name="nama_lengkap">
                        </div>
                        <div class="form-group mb-3">
                            <input type="date" class="form-control" placeholder="Date of Birth" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <h6><input type="radio" name="jenis_kelamin" value="perempuan"> Female</h6>
                            <h6><input type="radio" name="jenis_kelamin" value="lakilaki"> Male</h6>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" class="form-control" placeholder="No. Handphone" name="no_hp">
                        </div>
                    </div>
                </div>
                <div class="main-button text-center">
                    <button type="submit" class="btn btn-primary">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->
