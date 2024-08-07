<?php
include '../koneksi.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

// Cek apakah email ada dalam database
$user_query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

if (mysqli_num_rows($user_query) > 0) {
    // Ambil data user
    $data = mysqli_fetch_array($user_query);

    // Verifikasi password
    if (password_verify($password, $data['password'])) {
        // Set session berdasarkan level pengguna
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] =$data['password'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['foto'] = $data['foto'];

        if ($data['level'] == "admin") {
            $_SESSION['level'] = "admin";
            header('location:../?page=home/index');
        } elseif ($data['level'] == "member") {
            $_SESSION['level'] = "member";
            header('location:../../?page=home/index');
        } else {
            echo "<script>
                    alert('Level pengguna tidak dikenal');
                    window.location.href='../../?page=home/index';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Email atau password salah');
                window.location.href='../../?page=home/index';
              </script>";
    }
} else {
    echo "<script>
            alert('Email tidak ditemukan');
            window.location.href='../../?page=home/index';
          </script>";
}

mysqli_close($koneksi);
?>
