<?php



$getid = $_GET['id_paket'];

$search = mysqli_query($koneksi,"SELECT * FROM paket where id_paket ='$getid'");
$item = mysqli_fetch_array($search);

$batas_komik = $item['jumlah_komik'];
?>
<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">
            <!-- ***** Banner Start ***** -->
            
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-text">
                    <h2 style="font-size: 36px">Daftar Komik</h2>
                    <h6 style="padding-top: 18px">Silahkan pilih komik (Maksimal <?= $batas_komik ?> komik)</h6><br>
                    <div class="payment-info">
                      <div class="row">
                          <div class="col-sm-3 label"><h6>Payment </h6></div>
                      </div>
                      <div class="row">
                          <div class="col-sm-2 label"><p>BRI</p></div>
                          <div class="col-sm-9"><p>: 412201013348508 a.n Siti Rubaiah Al Adawiyah</p></div>
                      </div>
                      <div class="row">
                          <div class="col-sm-2 label"><p>Dana</p></div>
                          <div class="col-sm-9"><p>: 083829666466</p></div>
                      </div>
                      <div class="row">
                          <div class="col-sm-2 label"><p>Shopeepay</p></div>
                          <div class="col-sm-9"><p>: 083829666466</p></div>
                      </div>
                      <div class="row">
                          <div class="col-sm-2 label"><p>Gopay</p></div>
                          <div class="col-sm-9"><p>: 083829666466</p></div>
                      </div>
                  </div>




                        <div class="most-popular">
                            <form action="paket/proses_checkout.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="1" name="kuantitas">
                            <input type="hidden" name="id_paket" value="<?= $item['id_paket'] ?>">
                            <input type="hidden" name="id_paketsaya" value="<?=$_GET['id_paket']?>">
                            <!-- <input type="hidden" name="max_komik" value="<?= $item['jumlah_komik'] ?>"> -->
                            <ul>
                                  <li>
                                  <h4>Upload Bukti Bayar</h4>
                                  <br>
                                  <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar" required>
                                  </li>
                              </ul>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                    <?php
                                            $komik = mysqli_query($koneksi, "SELECT * FROM komik JOIN user ON komik.id_user=user.id_user ORDER BY id_komik DESC");
                                            $index = 0;    
                                            while($data= mysqli_fetch_array($komik)):
                                              $index++;
                                            ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            
                                            <a href="?page=komik/detail_komik&id_komik=<?php echo $data['id_komik'];?>"><img class="img-fluid" src="admin/assets/images/cover/<?= $data['cover']?>" alt="" width="100px" height="100px"></a>
                                            <h4><?= $data['judul']; ?><br /><span><?= $data['nama_lengkap']?></span></h4>   
                                            <div class="heading-section">
                                            <input type="checkbox" id="komik_<?php echo $data['id_komik']; ?>" name="id_komik[]" value="<?php echo $data['id_komik']; ?>">
                                                            <label for="komik_<?php echo $data['id_komik']; ?>"><h4>Pilih</h4></label>
                                      
                                            </div>
                                    
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <div class="col-lg-12">
                                      <div class="main-button">
                                        <button type="submit">Lanjut Pembelian</button>
                                      </div>
                                    </div>
                                </div>
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
    </div>

    
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const batasKomik = <?= $batas_komik ?>;
    const checkboxes = document.querySelectorAll('input[name="id_komik[]"]');
    let selectedCount = 0;

    function updateCheckboxes() {
        selectedCount = document.querySelectorAll('input[name="id_komik[]"]:checked').length;
        checkboxes.forEach(checkbox => {
            checkbox.disabled = selectedCount >= batasKomik && !checkbox.checked;
        });
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateCheckboxes);
    });

    updateCheckboxes();
});
</script>