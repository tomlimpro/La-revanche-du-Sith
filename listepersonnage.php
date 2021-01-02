<?php
  include 'navbar.php';
  $titrefilm = $bdd->prepare('SELECT titre FROM Film WHERE episode = ?');
  $titrefilm->execute(array($_GET['episode']));
  $titre = $titrefilm->fetch();
?>
<div class="container bg-light">
  	<div class="row">
	    <div class="col text-center">
	      	<h2>Voici la liste des personnages apparaissant dans : </h2>
	      	<h2><?php echo $titre['titre']; ?></h2>
	    </div>
  	</div>
	<div class="row">
	<?php
	$compteur = 0;
	$listeperso1 = $bdd->prepare('SELECT * FROM Film INNER JOIN PlaysIn ON Film.episode = PlaysIn.id_film INNER JOIN People ON PlaysIn.id_people = People.id WHERE id_film = ? ');
	$listeperso1->execute(array($_GET['episode']));
	while($data1 = $listeperso1->fetch()){
	  	if($compteur%3 == 0 && $compteur != 0){
	  		?></div><hr><div class="row"><?php
	  	}?>
	    <div class="col-md-4">
	        <div class="card">
	          	<a href="pagepersonnage.php?nom=<?php echo $data1['nom']; ?>" title="Clique pour découvrir sa description :)"><img class="card-img-top" src="<?php echo $data1['picture']; ?>" href="pagepersonnage.php" alt="Card image cap"></a>
	          	<div class="card-body">
	            	<h5 class="card-title"><?php echo $data1['nom']; ?></h5>
	            	<p class="card-text"></p>
	          	</div>
	          	<div class="card-footer">
	            	<small class="text-muted">Last updated 3 mins ago</small>
	          	</div>
	        </div>
	    </div>
	<?php 
	$compteur++;
	} ?>
	</div>
</div>
<?php include 'footer.php';?>