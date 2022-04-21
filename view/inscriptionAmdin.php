<?php require('../controlleur/contr_inscription_admin.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../public/css/styles.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="../public/css/styles.css">
</head>
<body>
	

	<div class="container">

		<div class="row">
			<div class="col-md-7">
				<?php if(isset($msg)) { ?>

				<div class="alert-danger"><?=$msg?></div>

				<?php } ?>


				
			</div>

			<div class="col-md-5">

				<div class="row">
					<div class="col-md-6"><h3></h3></div>
					<div class="col-md-6">

						
					</div>
					
				</div>
				<hr>


<form action=""  method="POST">

	<h1>Inscription</h1>
		<div class="user">
		<img src="../public/img/72-729929_add-user-group-woman-add-user-icon-png.jpg">
		</div>


<p class="choose-email">Admin</p> 
<div class="inputs">
	<input type="text" name="nom" placeholder="Entrez votre nom">
	<input type="email" name="mail" placeholder="Entrez votre email">
	<input type="password" name="mdp" placeholder="Entrez votre mot de passe">
	<input type="password" name="mdp1" placeholder="Confirmez votre mot de passe">
</div> 

<div align="center">
	<button type="submit" name="submit">S'enregistrer</button>
	
</div>


					
	</form>
		</div>
			
		</div>
		
	</div>
</body>
</html>