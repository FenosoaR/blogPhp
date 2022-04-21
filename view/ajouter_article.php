<?php require('../controlleur/contr_ajoutArticle.php')?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="../public/css/styleForm.css">
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-7">
				
			</div>

			<div class="col-md-5">

				<div class="row">
					<div class="col-md-6"><h3>Ajouter un article</h3></div>
					<div class="col-md-6">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					
				</div>
				<hr>

	<form action="" method="POST" enctype="multipart/form-data">

	<div class="row">
					<label class="label col-md-2 form-control-label">Titre</label>
					<div class="col-md-10">
						<input type="text" name="titre" class="form-control" placeholder="Entrez le nom du produit">
					</div>
				</div>
				<div class="row">
					<label class="label col-md-2 form-control-label">Contenu</label>
					<div class="col-md-10">
					<textarea class="form-control" name="contenu" placeholder="Entrez la descritpion du produit"></textarea>
					</div>
				</div>
				<div class="row  mt-2">
					<label class="label col-md-2 form-control-label">Photo</label>
					<div class="col-md-10">
						<input type="file" name="file" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<center><button style="width: 110px;" type="submit" name="submit" class="form-control btn-primary mt-3">Ajouter</button ></center> 
					</div>
				</div>
		
	</form>
	</div>
			
		</div>
		
	</div>

</body>
</html>