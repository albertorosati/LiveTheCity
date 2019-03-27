<?php
session_start();
$conn = new mysqli("localhost","livethecity","","my_livethecity");
$post=$_POST['post'];
$id=$_SESSION['id'];
$t=$conn->query("SELECT CURRENT_TIME");
$d=$conn->query("SELECT CURRENT_DATE");
if($row = $t->fetch_assoc()){
$time=$row['CURRENT_TIME'];
}
if($row = $d->fetch_assoc()){
$date=$row['CURRENT_DATE'];
}

$datee = date('Y-m-d H:i:s');

$sql='insert into post (fk_id_user,testo,date) VALUES (?,?,?);';
$result=$conn->prepare($sql);
$result->bind_param('iss',$id,$post,$datee);
$result->execute();

if(isset($_POST['upload'])){
// Compress image
function compressImage($source, $destination, $quality) {

  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);

  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);

}
  // Getting file name
  $filename = $_FILES['imagefile']['name'];
  if($filename!=""){
  // Valid extension
  $valid_ext = array('png','jpeg','jpg');

  // Location
  $location = "post_images/".$filename;
  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
	if(!in_array($file_extension,$valid_ext)){
    $file_extension='jpeg';
    $location="post_images/".$filename.".".$file_extension;
      $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
    }
// Check extension
  if(in_array($file_extension,$valid_ext)){
$filename=md5($filename.$time.$date);
$location="post_images/".$filename.".".$file_extension;
$nome_completo=$filename.".".$file_extension;
$sql='UPDATE post SET picture="'.$nome_completo.'" WHERE fk_id_user='.$id.' AND testo="'.$post.'"AND date="'.$datee.'"';
$conn->query($sql);
    // Compress Image
    compressImage($_FILES['imagefile']['tmp_name'],$location,60);

  }else{
    echo "Invalid file type.";
  }

}
}


$conn->close();
header('Location: home.php?success');

?>