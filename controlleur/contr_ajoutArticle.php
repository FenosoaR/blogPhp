<?php
/*SELECT * FROM `categorie` LIMIT 2*/
	
	require('../model/db.class.php');
	require("../model/slug.class.php");
	require("../model/article.class.php");
	
	if(isset($_POST['submit'])){



		$titre = $_POST['titre'];
		$contenu = $_POST['contenu'];
		$photo = $_FILES['file'];

		if(!empty($titre) && !empty($contenu) && !empty($photo)){

			

				$article = new Article();
				$new_titre = Slug:: slugger($titre);

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


				$article->insert(["titre"=>$new_titre,"contenu"=>$contenu,"photo"=>$new_file_name]);
				header('Location:../view/listeArticleAdmin.php');


		} else{

			echo "fenoy";
		}



		

	}

?>