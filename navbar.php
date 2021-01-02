<?php include'fonctions.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/style.css"/>
        <title> La revanche du site </title>
        <link rel="shortcut icon" href="images/sabre.png"/>
    </head>
    <body>
        <main role="main">
            <div class="container-fluid" style="background-image: url(images/etoiles.jpg)">
            		<a href="index.php"><img class="mx-auto pt-4 pb-4 d-block" src="images/starwars.png" alt="star wars"></a>
                </div>
            	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            	<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                	<span class="navbar-toggler-icon" style="color: white;"></span>
                	<span style="color: white">Menu</span>
            	</button>

            	<div class="collapse navbar-collapse" id="navbarNavDropdown">
                	<ul class="navbar-nav">
                    	<li class="nav-item active">
                        	<a class="nav-link" href="index.php">Accueil</a>
                    	</li>
                        
                        <style>
                            .dropdown-submenu{position:relative;}
                            .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
                            .dropdown-submenu:hover>.dropdown-menu{display:block;}
                            .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
                            .dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
                            .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
                        </style>

                    
                        
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Personnages <b class="caret"></b> </a> 
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#" style="color: #6c757d">Trilogie Originale (1977-1983)</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=4">Star Wars épisode IV : Un Nouvel Espoir</a></li>
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=5">Star Wars épisode V : L'Empire contre-attaque</a></li>
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=6">Star Wars épisode VI : Le Retour du Jedi</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#" style="color: #6c757d">Prélogie (1999-2005)</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=1">Star Wars épisode I : La Menace Fantôme</a></li>
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=2">Star Wars épisode II : L'Attaque des Clones</a></li>
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=3">Star Wars épisode III : La Revanche des Sith</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#" style="color: #6c757d">Troisième Trilogie (2015-2019)</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=7">Star Wars épisode VII : Le Réveil de la Force</a></li>
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=8">Star Wars épisode VIII : Les Derniers Jedi</a></li>
                                        <li><a class="dropdown-item" href="listepersonnage.php?episode=9">Star Wars épisode IX : L'Ascension de Skywalker</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#" style="color: #6c757d">Spin-Off</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Star Wars : The Clone Wars</a></li>
                                        <li><a class="dropdown-item" href="#">Rogue One: A Star Wars Story</a></li>
                                        <li><a class="dropdown-item" href="#">Solo: A Star Wars Story</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    	<!-- (ANCIENNE) Navbar Personnages 
                    	<li class="nav-item dropdown active">
                        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personnages</a>
                        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Trilogie Originale (1977-1983)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listepersonnage.php?episode=4">Star Wars épisode IV : Un Nouvel Espoir</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=5">Star Wars épisode V : L'Empire contre-attaque</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=6">Star Wars épisode VI : Le Retour du Jedi</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Prélogie (1999-2005)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listepersonnage.php?episode=1">Star Wars épisode I : La Menace Fantôme</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=2">Star Wars épisode II : L'Attaque des Clones</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=3">Star Wars épisode III : La Revanche des Sith</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Troisième Trilogie (2015-2019)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listepersonnage.php?episode=7">Star Wars épisode VII : Le Réveil de la Force</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=8">Star Wars épisode VIII : Les Derniers Jedi</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=9">Star Wars épisode IX : L'Ascension de Skywalker</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Spin-Off</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Star Wars : The Clone Wars</a>
                                    <a class="dropdown-item" href="#">Rogue One: A Star Wars Story</a>
                                    <a class="dropdown-item" href="#">Solo: A Star Wars Story</a>
                                </div>
                        	</div>
                    	</li> -->
                        
                        <!-- Fin Navbar Personnages -->
                    	<!-- Navbar des films -->
                        <li class="nav-item dropdown active">
                        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Films</a>
                        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Trilogie Originale (1977-1983)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listepersonnage.php?episode=4">Star Wars épisode IV : Un Nouvel Espoir</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=5">Star Wars épisode V : L'Empire contre-attaque</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=6">Star Wars épisode VI : Le Retour du Jedi</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Prélogie (1999-2005)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listepersonnage.php?episode=1">Star Wars épisode I : La Menace Fantôme</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=2">Star Wars épisode II : L'Attaque des Clones</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=3">Star Wars épisode III : La Revanche des Sith</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Troisième Trilogie (2015-2019)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="listepersonnage.php?episode=7">Star Wars épisode VII : Le Réveil de la Force</a>
                                    <a class="dropdown-item" href="listepersonnage.php?episode=8">Star Wars épisode VIII : Les Derniers Jedi</a>
                                    <a class="dropdown-item" href="listepersonne.php?episode=9">Star Wars épisode IX : L'Ascension de Skywalker</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Spin-Off</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Star Wars : The Clone Wars</a>
                                    <a class="dropdown-item" href="#">Rogue One: A Star Wars Story</a>
                                    <a class="dropdown-item" href="#">Solo: A Star Wars Story</a>
                                </div>
                            </div>
                    	</li>
                        <!-- Fin Navbar films -->
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Planètes</a>
            			</li>   
            			    
                       <!-- Navbar des Vaisseaux -->
            		   <li class="nav-item dropdown active">
                        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vaisseaux</a>
                        	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Trilogie Originale (1977-1983)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="vaisseaux.php">Star Wars épisode IV : Un Nouvel Espoir</a>
                                    <a class="dropdown-item" href="#">Star Wars épisode V : L'Empire contre-attaque</a>
                                    <a class="dropdown-item" href="#">Star Wars épisode VI : Le Retour du Jedi</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Prélogie (1999-2005)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Star Wars épisode I : La Menace Fantôme</a>
                                    <a class="dropdown-item" href="#">Star Wars épisode II : L'Attaque des Clones</a>
                                    <a class="dropdown-item" href="#">Star Wars épisode III : La Revanche des Sith</a>      
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Troisième Trilogie (2015-2019)</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Star Wars épisode VII : Le Réveil de la Force</a>
                                    <a class="dropdown-item" href="#">Star Wars épisode VIII : Les Derniers Jedi</a>
                                    <a class="dropdown-item" href="#">Star Wars épisode IX : L'Ascension de Skywalker</a>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #6c757d">Spin-Off</a>
                                <div class="dropright-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Star Wars : The Clone Wars</a>
                                    <a class="dropdown-item" href="#">Rogue One: A Star Wars Story</a>
                                    <a class="dropdown-item" href="#">Solo: A Star Wars Story</a>
                                </div>
                        	</div>
                    	</li>
                        <!-- Fin Navbar vaisseaux -->
            			    
                    </ul>
                </div>
               	<form class="form-inline" action="#">
                	<?php if(!isset($_COOKIE['idSession'])){ ?>
        	            <button type="button" class="btn btn-outline-danger mr-3" data-toggle="modal" data-target="#exampleModal1">Se connecter</button>
        	            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal2">Inscription</button>
        	        <?php } else { ?>
        	        	<a type="button" class="btn btn-outline-danger" href="deconnection.php">Se deconnecter</a>
        	        <?php } ?>
                </form>
            </nav>
            <!-- Modal Connection -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog" role="document">
            		<div class="modal-content">
            	      	<div class="modal-header">
            		        <h5 class="modal-title" id="exampleModalLabel">Connection</h5>
            			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			          	<span aria-hidden="true">&times;</span>
            			        </button>
            		    </div>
            		    <div class="modal-body">
            		    	<form action="" method="post">
            					<div class="form-group">
            				    	<label for="pseudo">Pseudo:</label>
            				    	<input type="pseudo" class="form-control" placeholder="Entrez votre pseudo" name="pseudo2" id="pseudo2">
            				  	</div>
            				  	<div class="form-group">
            				    	<label for="pwd">Password:</label>
            				    	<input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="mdp2" id="mdp2">
            				  	</div>
            				  	<button type="submit" name="formconnection" class="btn btn-primary">Submit</button>
            				</form>
            		    </div>
            		    <div class="modal-footer">
            		    	Pas encore de compte ?
            		    	<button type="button" class="btn btn-outline-danger mr-sm-5" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal2">Inscription</button>
            		      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            		    </div>
            	    </div>
            	 </div>
            </div>
            <!-- Modal Inscription -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog" role="document">
            		<div class="modal-content">
            	      	<div class="modal-header">
            		        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
            			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            			          	<span aria-hidden="true">&times;</span>
            			        </button>
            		    </div>
            		    <div class="modal-body">
            		    	<form action="" method="post">
            					<div class="form-group">
            				    	<label for="email">Email address :</label>
            				    	<input type="email" class="form-control" placeholder="Entrez votre email" name="email1" id="email1">
            				  	</div>
            				  	<div class="form-group">
            				  		<label for="pseudo">Pseudo :</label>
            				  		<input type="name" class="form-control" placeholder="Entrez votre pseudo" name ="pseudo1" id="pseudo1">
            				  	</div>
            				  	<div class="form-group">
            				    	<label for="pwd">Password:</label>
            				    	<input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="mdp1" id="mdp1">
            				  	</div>
            				  	<button type="submit" name="forminscription" class="btn btn-primary">Submit</button>
            				</form>
            		    </div>
            		    <div class="modal-footer">
            		    	<label for="pwd">Déjà inscrit ? <button type="button" class="btn btn-outline-danger mr-sm-5" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal1">Se connecter</button></label>
            		      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            		    </div>
            	    </div>
            	 </div>
            </div>