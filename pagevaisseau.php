<?php include 'navbar.php'; ?>
<!-- COMMENCEZ VOS BODY ICI -->
<div class="container">
	<div class="row">
        <div class="col-md-8">
        	<div id="wrappercentral" class="row">
        		<div class="col text-center">
        			<h2>Histoire de <?php echo $_GET['name'] ?> </h2>
        		</div>
        	</div>
        	<div id="wrappercentral"class="row">
        		<div class="col text-justify">
        			<?php 
        				$starship = getstarship($_GET['name']); 
        				echo nl2br($starship['description']);
        			?>

        		</div>
        	</div>
        </div>
        <div class ="col-md-4" style ="background: #dbd9d9;">
			<img src="<?php 
				$image = $bdd->prepare("SELECT picture FROM Starship WHERE name = ?");
				$image->execute(array($_GET['name']));
				$picture = $image->fetch();
				echo $picture['picture'];
			?>
			" class="pt-3 img-fluid" style= "width: 350px; no-repeat center center" alt="Circle image" class="img-circle"/>
			
	</div> 
</div>
<!-- FIN ICI -->
 <?php include 'footer.php'; ?>