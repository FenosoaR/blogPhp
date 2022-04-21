<?php

	require('../model/db.class.php');
	require('../model/article.class.php');

	$selectArticle = new Article();
	$tableau = [];		 
	$slug = $_GET['slug'];
	
	$select_slug_article = $selectArticle->selectSlug($slug);

			
			


	




		



		






?>