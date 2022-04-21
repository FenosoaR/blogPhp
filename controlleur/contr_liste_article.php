<?php

	require('../model/db.class.php');
	require('../model/article.class.php');

	$selectArticle = new Article();
	$tableau = [];
	$tous_les_articles = $selectArticle->selectAll();


	if(isset($_POST['submit'])){

		echo $_POST['search'];

	}









?>