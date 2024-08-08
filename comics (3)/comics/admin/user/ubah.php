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
                    <h6 style="padding-top: 18px"><a href="?page=user/tambah"></a></h6>
                    <form action="user/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?=$item['id_user']?>">
                  <div class="row">                  
                    <div class="col-lg-15 col-md-6 align-self-center">
                      <div class="form-group">
                          <h6 for="">Username</h6>
                          <input type="text" class="form-control" name="username" placeholder=" Masukan Username" value="<?php echo $item ['username'];?>">
                      </div>
                      <div class="form-group">
                          <h6 for="">Nama Lengkap</h6>
                          <input type="text" class="form-control" name="nama_lengkap" placeholder=" Masukan Nama Lengkap" value="<?php echo $item ['nama_lengkap'];?>">
                      </div>
                      <div class="form-group">
                          <h6 for="jenis_kelamin">Level</h6>
                                <select name="level" id="" class="form-control">
                                                          <option value="">Pilih Level</option>
                                                          <option value="admin" <?= $item['level']== 'admin' ? 'selected' : '' ?>>admin</option>
                                                          <option value="member" <?= $item['level']== 'member' ? 'selected' : '' ?>>member</option>
                                                      </select>
                      </div>
                   
                      <div class="form-group">
                          <h6 for="jenis_kelamin">Jenis Kelamin</h6>
                                
                                <h6> <input type="radio" name="jenis_kelamin" value="perempuan" <?= $item['jenis_kelamin'] == 'perempuan' ? 'checked' : '' ?>> Perempuan</h6>
                          <h6><input type="radio" name="jenis_kelamin" value="lakilaki" <?= $item['jenis_kelamin'] == 'lakilaki' ? 'checked' : '' ?>> Laki-laki</h6>
                      </div>
                   
                     
                     
                    </div>
                    <div class="col-lg-15 col-md-6 align-self-center">
                    
                      <div class="form-group">
                          <h6 for="">Nomor Telepon</h6>
                          <input type="number" class="form-control" name="no_hp" value="<?php echo $item ['no_hp'];?>">
                      </div>
                      <div class="form-group">
                          <h6 for="">Email</h6>
                          <input type="email" class="form-control" name="email" placeholder=" Masukan email" value="<?php echo $item ['email'];?>">
                      </div>
                    
                      <div class="form-group">
                          <h6 for="">Tanggal Lahir</h6>
                          <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $item ['tgl_lahir'];?>">
                      </div>
                      <div class="form-group">
                          <h6 for="">Foto</h6>
                        
                          <!-- <img src="assets/images/user/<?=$item ['foto']?>" width="100px"> -->
                                        <input type="hidden" name="foto_lama" value="<?= $item['foto']?>">
                                        <input type="file" name="foto" class="form-control">
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

    
   