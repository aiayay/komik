<div class="row">                  
                    <div class="col-lg-15 col-md-6 align-self-center">
                      <div class="form-group">
                          <h6 for="">Username</h6>
                          <input type="text" class="form-control" name="username" placeholder=" Masukan Username" value="<?php echo $item ['username'];?>">
                      </div>
                      <div class="form-group">
                          <h6 for="">Password</h6>
                          <input type="text" class="form-control" name="password" placeholder=" Masukan Password" value="<?php echo $item ['password'];?>">
                      </div>
                      <div class="form-group">
                          <h6 for="">Konfirmasi Password</h6>
                          <input type="text" class="form-control" name="confirm_password" placeholder=" Masukan Password" value="<?php echo $item ['confirm_password'];?>">
                      </div>
                  
                   
                      <div class="form-group">
                      <h6>
                                    <input type="radio" name="jenis_kelamin" value="perempuan" <?= $item['jenis_kelamin'] == 'perempuan' ? 'checked' : '' ?>> Female
                                </h6>
                                <h6>
                                    <input type="radio" name="jenis_kelamin" value="lakilaki" <?= $item['jenis_kelamin'] == 'lakilaki' ? 'checked' : '' ?>> Male
                                </h6>
                      </div>
                      <div class="form-group">
                      <h6 for="exampleInputEmail1">Level</h6>
                                                <select name="level" id="" class="form-control">
                                                    <option value="">Pilih Level</option>
                                                    <option value="admin" <?= $item['level']== 'admin' ? 'selected' : '' ?>>admin</option>
                                                    <option value="member" <?= $item['level']== 'member' ? 'selected' : '' ?>>member</option>
                                                </select>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    <div class="col-lg-15 col-md-6 align-self-center">
                    <div class="form-group">
                          <h6 for="">Nama Lengkap</h6>
                          <input type="text" class="form-control" name="nama_lengkap" placeholder=" Masukan Nama Lengkap" value="<?php echo $item ['nama_lengkap'];?>">
                          </li>
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
                          <img src="../assets/images/user/<?=$item ['foto']?>" width="100px">
                                        <input type="hidden" name="foto_lama" value="<?= $item['foto']?>">
                                        <input type="file" name="foto" class="form-control">
                      </div>
                  </div>
                    </div>