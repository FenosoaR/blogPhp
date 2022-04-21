<?php

require('../controlleur/contr_liste_article.php');

if(isset($_COOKIE['adresseMail'])){ ?>

	<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<form action="searchResult.php" method="POST">
        <?php require('navAdmin.php')?>

    </form>
<!--End form-->

    <link rel="stylesheet" type="text/css" href="style.css">
            </head>
            <body>
                <section class="produit">
                    <div class="container">
                        <div class="row">
                          <table class="table mt-5">
                      <thead class="thead-dark">
                          <tr>
                             <th scope="col">ID</th>
                             <th scope="col">Titre</th>
                             <th scope="col">Contenu</th>
                             <th scope="col">Photo</th>
                             <th scope="col">Modifier ou supprimer un article</th>

                          </tr>
                       </thead>
                        <tbody>


                            <?php foreach($tous_les_articles as $items) { ?>
                             
                              <tr>
                                  <th scope="row"><?=$items['id']?></th>
                                  <td><b><?=$items['titre']?></b></td>
                                  <td><?=$items['contenu']?></td>
                                  <td><div style="width: 75px; height: 75px;
                                  background-color: red;"><img src="../public/img/<?=$items['photo']?>" style="width: 100%; height: 100%; object-fit: cover;"></div></td>
                                  <td>
                                    <button class="btn-success ml-5"><a href="updateArticleAdmin.php?id=<?=$items['id']?>" style="color: white;">Modifier</a></button>
                                    <button class="btn-danger ml-2"><a href="../controlleur/contr_supp_article.php?id=<?=$items['id']?>" style="color: white;">Supprimer</a></button>
                                  </td>
                                 
                              </tr>

                                    

                            <?php } ?>
                          </tbody>
                        </table>
                    </div>
                </div>
                    </section>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>




<?php } else{

header('Location:connexionAdmin.php');

	}

?>

