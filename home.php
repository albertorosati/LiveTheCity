<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
<section class="content">
  <div class="block-header">
    <h2>AVVISI
    </h2>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="header bg-red">
        <h2>
          Interruzione Linea Elettrica
          <small>da Amministrazione Comunale
          </small>
        </h2>
      </div>
      <div class="body">
        Si avvisa la gentile utenza del quartiere di Mancasale, che il giorno 26/03/2019, dalle ore 18 alle ore 21 sarà vietata la sosta nella via principale, a causa dei lavori sul manto stradale, per la stesura della rete a fibra ottica.
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="header bg-red">
        <h2>
          Sciopero dei netturbini
          <small>da Amministrazione Comunale
          </small>
        </h2>
      </div>
      <div class="body">
        Si avvisa la gentile utenza del quartiere di Mancasale, che il giorno 30/03/2019, la normale attività di raccolta  rifiuti non sarà garantita a causa di uno sciopero dei netturbini.
        Ci scusiamo per il disagio arrecatoVi.
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="header bg-red">
        <h2>
          Interruzione Linea Elettrica
          <small>da Amministrazione Comunale
          </small>
        </h2>
      </div>
      <div class="body">
        Si avvisa la gentile utenza del quartiere di Mancasale, che il giorno 02/04/2019, a causa del previsto mal tempo, e delle numerose precipitazioni, l attività didattica sarà sospesa per tutti gli indirizzi di scuola primaria e secondaria.
        Ee’ consigliato rimanere in casa, ed evitare di uscire se non strettamente necessario.
      </div>
    </div>
  </div>
  </div>
<br>
<div class="block-header">
  <h2>POST DAGLI UTENTI
  </h2>
</div>
<form id="post" action="getPost.php" method="POST" enctype='multipart/form-data'>
  <div class="card">
    <div class="body">
      <div class="form-group"  style="margin-bottom: -5px;">
        <div class="form-line">
          <img src="/images/profpics/<?php echo $_SESSION['profile_pic'];?>.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
          <b>
            <?php echo $_SESSION['nome'];?>
          </b>, a cosa stai pensando?
          <input type="text" rows="1" class="form-control no-resize auto-growth" name="post" placeholder="Facci sapere la tua!" required>
        </div>
        <br>
        <input type="file" name="imagefile" style="margin-top:20px">
        <input type="submit" name="upload"class="btn btn-primary waves-effect"  value="INVIA" style="margin-top:-100px">
      </div>
    </div>
  </div>
</form>
<div class="card">
  <div class="body">
    <div>
      <?php
$conn = new mysqli("localhost","livethecity","","my_livethecity");
$query="SELECT post.testo, post.date, post.orario, post.picture FROM post inner join users on (fk_id_user=id_user) WHERE id_user=".$_SESSION['id']." ORDER BY date DESC";
$result=$conn->query($query);
$immagine="/images/profpics/".$_SESSION['profile_pic'];
if($result->num_rows!=0){
while($row=$result->fetch_assoc()){
$time = strtotime($row['date']);
$display_date = date("d/m/y G:i", $time);
echo '<div class="panel panel-default panel-post">
<div class="panel-heading">
<div class="media">
<div class="media-left">
<a href="#">
<img src='.$immagine.'.jpg'.' />
</a>
</div>
<div class="media-body">
<h4 class="media-heading">
<a href="#">'.$_SESSION['nome'].' '.$_SESSION['cognome'].'</a>
</h4>
Condiviso pubblicamente - '.$display_date.'
</div>
</div>
</div>
<div class="panel-body">
<div class="post">
<div class="post-heading">
<p>'.$row['testo'].'</p>
</div>
'; if($row['picture']!=null){
echo '<div class="post-content"> <img src="post_images/'.$row['picture'].'" class="img-responsive" style="object-fit: cover;
width: 100%; max-height: 300px; object-position: bottom;"/>
</div> ';}
echo '
</div>
</div>
</div>';
}
}
?>
    </div>
  </div>
</div>
</div>
</section>
<?php include 'include/bottom.php';?>
