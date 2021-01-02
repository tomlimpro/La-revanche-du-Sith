<?php include 'navbar.php'; ?>
<!-- COMMENCEZ VOS BODY ICI -->
<div class="container">
	<div class="row">
        <div class="col-md-8">
        	<div class="row">
        		<div class="col bg-dark">
        			<p>Seemingly abandoned by her parents on Jakku, Rey grew up a scavenger amid the wreckage of war. Her life changed when she agreed to help a droid on an urgent mission for the Resistance.<br>
					Rey discovered she was powerful in the Force, and sought out the vanished Jedi Master Luke Skywalker to train her.<br> 
					That ended in disappointment, as did her attempt to bring Kylo Ren back to the light. <br>
					But the resilient Rey continued her training and learned the truth about her parentage and her mysterious connection with Kylo. <br>
					She then faced her greatest test: a confrontation with fear and evil that would determine the galaxy’s fate.</p>
        		</div>
        	</div>
        </div>
        <div class ="col-md-4" style ="background: #dbd9d9;">
			<img src="images/Le Réveil de la Force/Rey2.jpg" class="pt-3 img-fluid" style= "width: 350px; no-repeat center center" alt="Circle image" class="img-circle"/>
			<h3>
				<?php
					echo $_GET['nom'];
				?>
			</h3>
			<hr>
			<h style="font-size: 15px;"><strong>Films : </strong> </h> <a href="" style="color: #730505;"><h style="margin-left: 59px;"> Stars Wars : The Force Awakens</h></a><br>
			<a href="" style="color: #730505;"><h style="margin-left: 108px;"> Stars Wars : The Last Jedi</h></a><br>
			<a href="" style="color: #730505;"><h style="margin-left: 108px;"> Stars Wars : The Rise of Skywalker</h></a><br>
			<h style="margin-left: 108px;"> Stars Wars : Forces of Destiny</h><br>
			<hr>
			<h style="font-size: 15px;"><strong>Affiliations : </strong> </h><a href="" style="color: #730505;"> <h style="margin-left: 30px;" > </h></a><br>
			<hr>
			<h style="font-size: 15px;"><strong>Locations : </strong> </h><a href="" style="color: #730505;"> <h style="margin-left: 30px;" > Jakku</h></a><br>
			<a href="" style="color: #730505;"><h style="margin-left: 108px;"> Goazon</h></a><br>
			<a href="" style="color: #730505;"><h style="margin-left: 108px;"> Badlands</h></a><br>
			<a href="" style="color: #730505;"><h style="margin-left: 108px;"> Rey's Home</h></a><br>
			<hr>
			
				
				<?php 

				$reponse = $bdd->prepare('SELECT sexe FROM People WHERE nom = ?');
				$reponse->execute(array($_GET['nom']));
				while ($donnees = $reponse->fetch()){
					echo '<h style="font-size: 15px;"><strong>Sexe : </strong> </h>' . '      ' . $donnees['sexe'];
				}

			 
			
				?> 
			<hr>
			<?php 

				$reponse = $bdd->prepare('SELECT taille FROM People WHERE nom = ?');
				$reponse->execute(array($_GET['nom']));
				while ($donnees = $reponse->fetch()){
					echo '<h style="font-size: 15px;"><strong>Taille : </strong> </h>' . '      ' . $donnees['taille'];
				}
			
				?> 
			<hr>
			<?php 

				$reponse = $bdd->prepare('SELECT espece FROM People WHERE nom = ?');
				$reponse->execute(array($_GET['nom']));
				while ($donnees = $reponse->fetch()){
					echo '<h style="font-size: 15px;"><strong>Espece : </strong> </h>' . '      ' . $donnees['espece'];
				}

			 
			
				?> 
			<hr>
			<?php 

				$reponse = $bdd->prepare('SELECT armes FROM People WHERE nom = ?');
				$reponse->execute(array($_GET['nom']));
				while ($donnees = $reponse->fetch()){
					echo '<h style="font-size: 15px;"><strong>Armes : </strong> </h>';
					echo nl2br($donnees['armes']);
				}
			
				?> 
			<hr>
			<?php 

				$reponse = $bdd->prepare('SELECT vehicules FROM People WHERE nom = ?');
				$reponse->execute(array($_GET['nom']));
				while ($donnees = $reponse->fetch()){
					echo '<h style="font-size: 15px;"><strong>Vehicules : </strong> </h>';
					echo nl2br($donnees['vehicules']);
					
				}
				?> 
		</div>	
		<div class="clearfix"></div>
	</div> 
</div>
<!-- FIN ICI -->
 <?php include 'footer.php'; ?>