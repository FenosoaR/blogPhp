<?php

	class Admin extends Db{

		public $table;
		public $column;


		function __construct(){

			$this->table = "admin";
			$this->column = ["nom","email","mdp"];
			parent::__construct();
		}
	}




		



?>