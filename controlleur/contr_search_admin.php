<?php

require('../model/db.class.php');
require('../model/article.class.php');

if(isset($_POST['submit'])){

	$article = new Article();
	$result = $article->search($_POST['search']);

	

}




?>