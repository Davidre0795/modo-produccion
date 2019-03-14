<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=35.196.228.81;dbname=ecommerce",
						"usuario",
						"contraseña",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



