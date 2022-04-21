<?php
if (isset($_GET['slug'])){
require('../controlleur/contr_view_article.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



			<div style="width: 500px;height: 150px; border: 1px solid grey">

				<h3><?=$select_un_article['titre']?></h3>

				<p><?=$select_un_article['contenu']?></p>

				<div style="width: 100px; height: 50px;">
					<img src="../public/img/<?=$select_un_article['photo']?>" style="width: 100%;height: 100%; object-fit: cover;">
				</div>

				<button> <a href="voirArticleAdmin.php?id=<?=$values['id']?>">Voir</a></button>
				
			</div>



</body>
</html>