<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$nama_lengkap = $_POST ['nama_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$no_hp =$_POST['no_hp'];
$email=$_POST['email'];
$tgl_lahir =$_POST['tgl_lahir'];
$level =$_POST['level'];

$namafile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);

$password = password_hash($password, PASSWORD_DEFAULT);
$confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);

$update = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', confirm_password='$confirm_password', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin',
no_hp='$no_hp',email='$email',tgl_lahir='$tgl_lahir',level='$level',foto='$namafile' WHERE id_user='$id_user'"); 
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