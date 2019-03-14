<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=35.184.246.24;dbname=ecommerce",
						"prueba",
						"admin123",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



