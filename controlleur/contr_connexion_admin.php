<?php

require('../model/db.class.php');
require('../model/admin.class.php');

if(isset($_POST['submit'])){

  $mail = $_POST['mail'];
  $mdp = $_POST['mdp'];
  $mail_valid = null;

  	if(!empty($mail) && !empty($mdp)){

  				
  				$admin = new Admin();

  				foreach ($admin->verifyAdmin() as $res) {

  					if($mail == $res['email']){

  						$mail_valid = $mail;

  					}
  						}

  						if($mail_valid != null ){

  							$compare_mdp = password_verify($mdp,
  							$admin->verifyMdpAmdin($mail_valid)['mdp']);

  							 	if($compare_mdp){

  							 		setcookie('adresseMail' , $mail_valid , time()+3600 , '/');
									header('Location:../view/listeArticleAdmin.php');

  							 	} else{
                          $msg = "Mot de passe incorrecte!";

  							 		
  							 	}

  						} else {

  							$msg =  "Email invalide";
  						}



  	} else{
  		$msg = "Veuillez remplir tous les champs";
  	}

}


?>