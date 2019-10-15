
<?php

//process.php

$connect = new PDO("mysql:host=localhost; dbname=form", "root", "");

if(isset($_POST["name"]))
{
 $data = array(
  ':name'  => trim($_POST["name"]),
  ':nomortelepon'  => trim($_POST["nomortelepon"]),
  ':idline'  => trim($_POST["idline"]),
  ':universitas'  => trim($_POST["universitas"]),
  ':angkatan'  => trim($_POST["angkatan"]),
  ':jurusan'  => trim($_POST["jurusan"]),
  ':skill'  => trim($_POST["skill"]),
  ':reason'  => trim($_POST["reason"])
 );

 $query = "
 INSERT INTO pendaftaran
 (name, nomortelepon, idline, universitas, angkatan, jurusan, skill, reason)
 VALUES (:name, :nomortelepon, :idline, :universitas, :angkatan, :jurusan, :skill, :reason)
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 echo 'done';

}

?>
