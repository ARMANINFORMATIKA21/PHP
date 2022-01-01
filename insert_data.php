
<?php
include'table.php';
$nama = @$_POST['hewan'];
$tombol = @$_POST['tombol'];

$sql = "INSERT INTO nama_table (name) VALUES ('$nama')";
$eks = mysqli_query($connect,$sql);

?>
<!doctype HTML>
<html>
   <body>
      <form action = '' method = 'POST'/>
      <input name = 'hewan' type = 'text'/>
      <button type = 'submit' name = 'tombol'>upload</button>
   </body>
</html>
