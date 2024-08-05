<?php



$getid = $_GET['id_user'];

$search = mysqli_query($koneksi,"SELECT * FROM user where id_user ='$getid'");
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
                    <h2 style="font-size: 36px">DATA USER</h2>
                    <h6 style="padding-top: 18px"><a href="?page=user/tambah">Tambah Data User</a></h6>
                    <form action="user/proses_ubah.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id_user" value="<?=$item['id_user']?>">
                        <div class="row">                  
                          <div class="col-lg-15 align-self-center">
                            <ul>
                              <li>
                                  <h6 for="">Username</h6>
                                  <input type="text" class="form-control" name="username" placeholder=" Masukan Username" value="<?php echo $item ['username'];?>">
                              </li>
                              <li>
                                  <h6 for="">Password</h6>
                                  <input type="text" class="form-control" name="password" placeholder=" Masukan Password" value="<?php echo $item ['password'];?>">
                              </li>
                              <li>
                                  <h6 for="">Konfirmasi Password</h6>
                                  <input type="text" class="form-control" name="confirm_password" placeholder=" Konfirmasi Password" value="<?php echo $item ['confirm_password'];?>">
                              </li>
                              <li>
                              <h6 for="exampleInputEmail1">Level</h6>
                                                <select name="level" id="" class="form-control">
                                                    <option value="">Pilih Level</option>
                                                    <option value="admin" <?= $item['level']== 'admin' ? 'selected' : '' ?>>admin</option>
                                                    <option value="member" <?= $item['level']== 'member' ? 'selected' : '' ?>>member</option>
                                                </select>
                              </li>
                              <li>
                                  <h6 for="">Nama Lengkap</h6>
                                  <input type="text" class="form-control" name="nama_lengkap" placeholder=" Masukan Nama Lengkap" value="<?php echo $item ['nama_lengkap'];?>">
                              </li>
                              <li>
                                  <h6 for="">Nomor Telepon</h6>
                                  <input type="number" class="form-control" name="no_hp" value="<?php echo $item ['no_hp'];?>">
                              </li>
                              <li>
                                  <h6 for="">Email</h6>
                                  <input type="email" class="form-control" name="email" placeholder=" Masukan email" value="<?php echo $item ['email'];?>">
                              </li>
                              <li>
                              <h6 for="jenis_kelamin">Gender</h6>
                                <br>
                                <h6>
                                    <input type="radio" name="jenis_kelamin" value="perempuan" <?= $item['jenis_kelamin'] == 'perempuan' ? 'checked' : '' ?>> Female
                                </h6>
                                <h6>
                                    <input type="radio" name="jenis_kelamin" value="lakilaki" <?= $item['jenis_kelamin'] == 'lakilaki' ? 'checked' : '' ?>> Male
                                </h6>

                              </li>
                              <li>
                                  <h6 for="">Tanggal Lahir</h6>
                                  <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $item ['tgl_lahir'];?>">
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

    
   