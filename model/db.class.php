<?php

	class Db{

		public $db;
		public $table;
		public $column;

		function __construct(){
			

			try{

					$this->db = new PDO('mysql:dbname=blogg;host:127.0.0.1','root',null);
			   	} catch(PDOException $error){

			   		echo $error->getMessage();

			   	}


		}


		// methode  manomboka eto

		function insert($data){


			$attr ='';
			$nbr_point_dinterogation = '';
			$array = [];
			$i = 0;
			


					foreach ($this->column as $w) {	
							
							$attr = $attr." , ".$w;
							$nbr_point_dinterogation = $nbr_point_dinterogation.','.'?';
						
					}

					$attr = substr($attr, 2);
					$nbr_point_dinterogation = substr($nbr_point_dinterogation,1);



						foreach ($data as $key ) {

							array_push($array, $data[$this->column[$i]]);
							
							$i++;
						
						}

				echo  $req = "INSERT INTO `$this->table`  ($attr) VALUES ($nbr_point_dinterogation)";
						      $statement = $this->db->prepare($req);
				 			     $statement->execute($array);
							  	 
							  	
									


		}

		function verifyAdmin(){

			$req = $this->db->query("SELECT * FROM `$this->table`");
			$result = $req->fetchAll();

			return $result;

		}



		function verifyMdpAmdin($mail_valid){

			$req = $this->db->query("SELECT * FROM `$this->table` WHERE `email`= '$mail_valid' ");
			$result = $req->fetch();

			return $result;

		} 

		function selectAll(){

			$req = $this->db->query("SELECT * FROM `$this->table`");
			$result = $req->fetchAll();

			return $result;
		}

		function selectOne($id){

			$req = $this->db->query("SELECT * from `$this->table` WHERE `id` = $id");
			$result = $req->fetch();

			return $result;
		}

		function remove($id){

			echo $req = "DELETE  FROM `$this->table` WHERE `id` =$id";
			 $stm = $this->db->prepare($req);
			 $stm->execute();

		}


		function update($data,$id){

			$attr= '';
			$i = 0;
			$array = [];

		foreach ($this->column as $w) {

			$attr = $attr.','.$w." = "." ? ";
			array_push($array, $data[$this->column[$i]]);
			$i++;
			
		}

		

		 $attr = substr($attr,1);

		 

		 	
		 
		 $req = "UPDATE `$this->table` SET $attr WHERE `id`=$id";
		 $stm = $this->db->prepare($req);
		 $stm->execute($array);

			
		}


		function search($recherche){

			$req = $this->db->query("SELECT * FROM `$this->table` WHERE `titre`  LIKE '%$recherche%'");
			$result = $req->fetchAll();
			return $result;

		}

		function selectSlug($slug){

			 $req = $this->db->query("SELECT * from `$this->table` WHERE `titre` = '$slug'");
			$result = $req->fetch();

			return $result;

		}

		




	}







?>