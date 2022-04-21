<?php

require('../model/db.class.php');
require('../model/admin.class.php');

if(isset($_POST['submit'])){

		 $nom = $_POST['nom']; 
		 $mail = $_POST['mail'];
		 $mdp = $_POST['mdp'];
		 $mdp1 = $_POST['mdp1'];

		
		if(!empty($nom) && !empty($mail) && !empty($mdp) && !empty($mdp1)){

				if(strpos($mail, "@") && strpos($mail, ".")){

						if($mdp == $mdp1){

						 $mdpCryptE = password_hash($mdp,PASSWORD_BCRYPT,['cost'=>12]);

						 $admin = new Admin();
						 $admin->insert(["nom"=>$nom,"email"=>$mail,"mdp"=>$mdpCryptE]);
						 header('Location:../view/connexionAdmin.php');


						} else{

							$msg = "mdp incorrecte";
						}

				} else{

					$msg = "Email invalide";
				}

					

		} else{
				
				$msg =  "Veuillez remplir tous les champs";
			
			}
	

}



?>