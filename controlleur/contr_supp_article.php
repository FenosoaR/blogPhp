<?php
	require('../model/db.class.php');
	require('../model/article.class.php');

	if (isset($_GET['id'])){

		$article = new Article();
		$id = $_GET['id'];
		$article->remove($id);

		 header('Location:../view/listeArticleAdmin.php');

	}


?>