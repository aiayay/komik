<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST ['password'];
$confirm_password = $_POST ['confirm_password'];
$nama_lengkap = $_POST ['nama_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$no_hp =$_POST['no_hp'];
$email=$_POST['email'];
$tgl_lahir =$_POST['tgl_lahir'];
$level =$_POST['level'];


$update = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', confirm_password='$confirm_password', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin',
no_hp='$no_hp',email='$email',tgl_lahir='$tgl_lahir',level='$level' WHERE id_user='$id_user'"); 
if ($update){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='../?page=user/index'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='../?page=user/index'
        </script>";
    }

?>