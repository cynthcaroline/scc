<?php

//fetch_single.php

include('database_connection.php');

if(isset($_GET["id"]))
{
 $query = "SELECT * FROM pendaftaran WHERE id = '".$_GET["id"]."'";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<div class="row">';
 foreach($result as $row)
 {
  $images = '';
  //if($row["images"] != '')
  //{
   //$images = '<img src="images/'.$row["images"].'" class="img-responsive img-thumbnail" />';
  //}
  //else
  //{
   $images = '<img src="https://www.gravatar.com/avatar/38ed5967302ec60ff4417826c24feef6?s=80&d=mm&r=g" class="img-responsive img-thumbnail" />';
  //}
  $output .= '
  <div class="col-md-3">
   <br />
   '.$images.'
  </div>
  <div class="col-md-9">
   <br />
   <p><label>Nama :&nbsp;</label>'.$row["name"].'</p>
   <p><label>Nomor Telepon :&nbsp;</label>'.$row["nomortelepon"].'</p>
   <p><label>ID Line :&nbsp;</label>'.$row["idline"].'</p>
   <p><label>Universitas :&nbsp;</label>'.$row["universitas"].'</p>
   <p><label>Angkatan :&nbsp;</label>'.$row["angkatan"].'</p>
   <p><label>Jurusan :&nbsp;</label>'.$row["jurusan"].'</p>
   <p><label>Kemampuan :&nbsp;</label>'.$row["skill"].'</p>
   <p><label>Alasan Bergabung:&nbsp;</label>'.$row["reason"].'</p>
  </div>
  </div><br />
  ';
 }
}
 echo $output;

?>
