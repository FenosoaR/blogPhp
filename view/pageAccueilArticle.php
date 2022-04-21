
<?php
require('../controlleur/contr_liste_article.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

	<link rel="stylesheet" type="text/css" href="../public/css/card.css">
</head>
<?php require('navAccueil.php'); ?>

<div class="container">
	<div class="row">

		<?php foreach ($tous_les_articles as $items) {   ?>

			 <div class="col-12 col-sm-12 col-md-3 col-lg-3">

                        <div class="card mt-5">
                        <img src="../public/img/<?=$items['photo']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 style="color: grey; " class="card-title"><?=$items['titre']?></h5>
                          <p class="card-text" style="font-size: 13px;color: grey"><small class="text-muted" style="font-weight: bold; font-size: 18px;"><?=$items['contenu']?></small></p>
                          <div class="rating">
                               <center> <button  class="btn-info" style="width: 50%;"><a href="../view/voir.php?slug=<?=$items['titre']?>" style="color: white; text-decoration: none;">Voir</a></button></center>
                           </div>
                        </div>
                        </div>


                        
                    </div>



		<?php  } ?>
	
		
	</div>
	
</div>





</body>
</html>