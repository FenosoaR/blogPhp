<?php


	class Slug {



	public  static function slugger($string){


			// $resultat = str_replace(["à","é","ô"," ","&","@","'"],["a","e","o","-","","",""], $string);
		//ilay acccent kely ilazana otrn hoe fiatombohany, izany hjoe itanisa hoe reto avy.

		$slug = preg_replace('/[^A-Za-z0-9]+/', '-', $string);

			return strtolower($slug)."-".uniqid();





	}
}


?>