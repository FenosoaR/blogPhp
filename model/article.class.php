<?php
	
	class Article extends Db{

		public $table;
		public $column;

		function __construct(){

			$this->table = "article";
			$this->column = ["titre","contenu","photo"];
			parent::__construct();
		}
	}

?>