<?php

	require('../model/db.class.php');
	require('../model/article.class.php');

	$selectArticle = new Article();
	$tableau = [];		 
	$id = $_GET['id'];
	$select_un_article = $selectArticle->selectOne($id);
	

			
			


	




		



		






?>