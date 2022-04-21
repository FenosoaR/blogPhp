<?php require('../controlleur/contr_connexion_admin.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../public/css/styles.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<form action="" method="POST">

		<?php if(isset($msg)){ ?>

			<div class="alert-danger"><?=$msg?></div>

		<?php } ?>	
		<h1>Se connecter</h1>

<div class="social-media">
  		
	<i class="fa-solid fa-lock"></i>
</div>

<p class="choose-email">Admin</p> 
<div class="inputs">
	<input type="email" name="mail" placeholder="Entrez votre email">
	<input type="password" name="mdp" placeholder="Entrez votre mot de passe">
</div> 
<p class="inscription" style="margin-left: 61px;">Créer un <span ><a href="inscriptionAmdin.php"  style="color: red;">compte</a></span></p>
<div align="center">
	<button type="submit" name="submit" data-toggle="modal" data-target="#exampleModal">Se connecter</button>
	
</div>
		
	</form>

</body>
</html>