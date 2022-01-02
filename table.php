
<?php
$host = '127.0.0.1';
$user = 'username';
$pass = 'password';
$db = 'nama_database';
$connect = mysqli_connect($host,$user,$pass,$db);
$sql = "CREATE TABLE nama_table(nama varchar(100),nim varchar(100))";
if(mysqli_query($connect, $sql)){
  echo "Tabel Berhasil Dibuat";
}
?>

