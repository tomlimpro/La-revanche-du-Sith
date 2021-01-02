<?php 
  include 'navbar.php'
  $titrefilm = $bdd->prepare('SELECT titre FROM Film WHERE episode = ?');
  $titrefilm->execute(array($_GET['episode']));
  $titre = $titrefilm->fetch();?>

<div class="container bg-light">
    <div class ="row">
        <div class="col text-center">
	      	<h1><?php echo $titre['titre']; ?></h1>
	    </div>
    </div>
</div>

<?php include 'footer.php'; ?>