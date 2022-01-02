//table.php
<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tombol = $_POST['tombol'];
if(mysqli_query($connect, $sql)){
$sql = "INSERT INTO nama_table values ('$nama','$nim')";
$eksekusi = mysqli_query($connect,$sql);
}
?>

//index.php
<!doctype HTML>
<html>
   <body>
      <form action = 'table.php' method = 'POST'/>
      <input name = 'nama' type = 'text'/>
      <input name = 'nim' type = 'text'/>
      <button type = 'submit' name = 'tombol'>upload</button>
   </body>
</html>
