<?php
session_start();
require '../../functions/MY_model.php';
$nama_dokter = $_POST['nama_dokter'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$spesialis = $_POST['spesialis'];
$jadwal = $_POST['jadwal'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO dokter VALUES('', '$nama_dokter', '$alamat', '$telephone', '$spesialis', '$jadwal', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=dokter";</script>';
} else {
  echo mysqli_error($conn);
}
