//table.php
<?php
$nama = $_POST['hewan'];
$tombol = $_POST['tombol'];
if(mysqli_query($connect, $sql)){
$sql = "INSERT INTO nama_table (name) VALUES ('$nama')";
$eksekusi = mysqli_query($connect,$sql);
}
?>

//index.php
<!doctype HTML>
<html>
   <body>
      <form action = 'table.php' method = 'POST'/>
      <input name = 'hewan' type = 'text'/>
      <button type = 'submit' name = 'tombol'>upload</button>
   </body>
</html>
