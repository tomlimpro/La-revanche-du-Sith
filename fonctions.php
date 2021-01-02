<?php
try { 
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_9_7;charset=utf8;port=3306', 'grp_9_7', 'esh3JeeT2l'); 
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 
} catch(Exception $e) { 
	die('Erreur : ' . $e->getMessage()); 
};
if(isset($_POST['forminscription'])){
	$pseudo1 = htmlspecialchars($_POST['pseudo1']);
	$email1 = htmlspecialchars($_POST['email1']);
	$mdp1 = sha1($_POST['mdp1']);
	if(!empty($_POST['pseudo1']) AND !empty($_POST['email1'])AND !empty($_POST['mdp1'])){
		$taillepseudo = strlen($pseudo1);
		if($taillepseudo <= 255){
			if(filter_var($email1, FILTER_VALIDATE_EMAIL)){
				$reqmail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
				$reqmail -> execute(array($email1));
				$exist_mail = $reqmail->rowCount();
				if($exist_mail == 0){
					$insertmbr = $bdd->prepare("INSERT INTO users(pseudo, mot_de_passe, email) VALUES(?,?,?)");
					$insertmbr->execute(array($pseudo1, $mdp1, $email1));
					$message = "Compte créé";
				}
			}
		}
	}
}
if(isset($_POST['formconnection'])){
	$pseudo2 = htmlspecialchars($_POST['pseudo2']);
	$mdp2 = sha1($_POST['mdp2']); 
	if(!empty($_POST['pseudo2']) AND !empty($_POST['mdp2'])){
		$requser = $bdd->prepare("SELECT * FROM users WHERE pseudo=? AND mot_de_passe=?");
		$requser->execute(array($pseudo2, $mdp2));
		$exist_user = $requser->rowCount();
		if($exist_user == 1){
			$userinfo = $requser->fetch();
			$idTemp = $userinfo['idUsers'];
			setcookie("idSession", $idTemp, time()+365*24*3600, null, null, false, true);
			header("Refresh: 0");
		}
	}
}
?>