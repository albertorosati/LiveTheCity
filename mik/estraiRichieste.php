<?php
$conn = new mysqli("localhost","livethecity","","my_livethecity");
if ($mysqli->connect_error) {
die('Errore di connessione (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
$query="SELECT users.name, users.surname, richieste.descrizione, richieste.fascia FROM users inner join richieste on(id_user=fk_id_user)";
$result=$conn->query($query);

if($result->num_rows!=0){
while($row=$result->fetch_assoc()){
echo $row[name]." ".$row[surname]." ".$row[descrizione]." ".$row[fascia]."\n";
}
}else{

echo "no";
}



?>