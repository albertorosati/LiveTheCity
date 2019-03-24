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
$sql='insert into post (fk_id_user,testo,orario,data) VALUES (?,?,?,?);';
$result=$conn->prepare($sql);
$result->bind_param('isss',$id,$post,$time,$date);
$result->execute();
$conn->close();
header('Location: home.php?/success');





?>