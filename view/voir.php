<?php
if (isset($_GET['slug'])){
require('../controlleur/contr_voir_article.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: black">

<center>
	<div style="background-color: white; width: 700px;height: 500px; border-radius: 20px;">
		<div style="width: 250px;height: 200px; background-color: black; float: left;">
			<img src="../public/img/<?=$select_slug_article['photo']?>" style="width: 100%;height: 100%;object-fit: cover;">
		</div>
		<h3><?=$select_slug_article['titre']?></h3>
		<p><?=$select_slug_article['contenu']?></p>
	</div></center>

</body>
</html>