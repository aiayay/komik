<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h2 style="font-size: 36px">DATA USER</h2>
                    <h6 style="padding-top: 18px"><a href="?page=user/tambah">Tambah Data User</a></h6>
                    <table class="table table-striped custom-table" style="color: white;">
                              <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nomor Handpone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                $no =1;
                                $user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
                                while($item = mysqli_fetch_array($user)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $item['username']; ?></td>
                                        <td><?= $item['password']; ?></td>                                        
                                        <td><?= $item['nama_lengkap']?></td>
                                        <td><?= $item['email']?></td>
                                        <td><?= $item['tgl_lahir']?></td>
                                        <td><?= $item['jenis_kelamin']?></td>
                                        <td><?= $item['no_hp']?></td>
                                        <td><a href="?page=user/ubah&id_user=<?php echo $item["id_user"];?>" class="btn btn-success">Ubah</a><br><br>
                                            <a onclick="return confirm('yakin mau dihapus??')" href="user/hapus.php?id_user=<?php echo $item["id_user"];?>" class="btn btn-danger">Hapus</a></td>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                  </div>
                </div>
             
              </div>

          </div>
        </div>
      </div>
    </div>

    
   