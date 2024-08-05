<?php
// memulai session
session_start();

session_destroy();

echo "<script>
alert ('anda berhasil keluar')
window.location.href='index.php'
</script>";
?>
