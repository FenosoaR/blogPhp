<?php
session_start();

	require('../model/db.class.php');
	require('../model/article.class.php');


		
		if (isset($_POST['submit'])){ 

		$id = $_GET['id'];	
	    $titre = $_POST['titre'];
	    $contenu = $_POST['contenu'];
	    $photo = $_FILES['file'];


		$upload_dir = "../public/img/";

			$current_file_name = $_FILES['file']['name'];
			$file_extension = strtolower(pathinfo($current_file_name, PATHINFO_EXTENSION));
			$new_file_name = 'FILE-'.time().".".$file_extension;
			$file_dir = $upload_dir.$new_file_name;
			
			if(move_uploaded_file($_FILES['file']['tmp_name'], $file_dir)){

				echo "file uploaded";
	
			}else{

				echo "upload fail";

			}


		$article = new Article();
		$article->update(["titre"=>$titre,"contenu"=>$contenu,"photo"=>$new_file_name],$id);
		header('Location:../view/listeArticleAdmin.php');


			

}



?>