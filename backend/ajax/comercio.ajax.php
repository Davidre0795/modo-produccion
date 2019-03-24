<?php

require_once "../controladores/comercio.controlador.php";
require_once "../modelos/comercio.modelo.php";

class AjaxComercio{

	/*=============================================
	CAMBIAR LOGOTIPO
	=============================================*/	

	public $imagenLogo;

	public function ajaxCambiarLogotipo(){

		$item = "logo";
		$valor = $this->imagenLogo;

		$respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);

		echo $respuesta;


	}

	/*=============================================
	CAMBIAR ICONO
	=============================================*/

	public $imagenIcono;	

	public function ajaxCambiarIcono(){

		$item = "icono";
		$valor = $this->imagenIcono;

		$respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);

		echo $respuesta;

	}


	/*=============================================
	CAMBIAR COLORES
	=============================================*/

	public $barraSuperior;
	public $textoSuperior;
	public $colorFondo;
	public $colorTexto;	

	public function ajaxCambiarColor(){

		$datos = array("barraSuperior"=>$this->barraSuperior,
					   "textoSuperior"=>$this->textoSuperior,
					   "colorFondo"=>$this->colorFondo,
					   "colorTexto"=>$this->colorTexto);

		$respuesta = ControladorComercio::ctrActualizarColores($datos);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR CONTACTO
	=============================================*/

	public $phone_number;
	public $email;
	public $address;
	public $city;	
	public $country;
	public $map;	

	public function ajaxCambiarContacto(){

		$datos = array("phone_number"=>$this->phone_number,
					   "email"=>$this->email,
					   "address"=>$this->address,
					   "city"=>$this->city,
					   "country"=>$this->country,
					   "map"=>$this->map);

		$respuesta = ControladorComercio::ctrActualizarContacto($datos);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR REDES SOCIALES
	=============================================*/

	public $redesSociales;

	public function ajaxCambiarRedes(){

		$item = "redesSociales";
		$valor = $this->redesSociales;

		$respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR SCRIPT
	=============================================*/

	public $apiFacebook;
	public $pixelFacebook;
	public $googleAnalytics;

	public function ajaxCambiarScript(){

		$datos = array("apiFacebook"=>$this->apiFacebook,
					   "pixelFacebook"=>$this->pixelFacebook,
					   "googleAnalytics"=>$this->googleAnalytics);

		$respuesta = ControladorComercio::ctrActualizarScript($datos);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR INFORMACIÓN
	=============================================*/

	public $impuesto;
	public $envioNacional;
	public $envioInternacional;
	public $tasaMinimaNal;
	public $tasaMinimaInt;
	public $seleccionarPais;
	public $modoPaypal;
	public $clienteIdPaypal;
	public $llaveSecretaPaypal;
	public $modoPayu;
	public $merchantIdPayu;
	public $accountIdPayu;
	public $apiKeyPayu;

	public function ajaxCambiarInformacion(){

		$datos = array("impuesto"=>$this->impuesto,
						"envioNacional"=>$this->envioNacional,
						"envioInternacional"=>$this->envioInternacional,
						"tasaMinimaNal"=>$this->tasaMinimaNal,
						"tasaMinimaInt"=>$this->tasaMinimaInt,
						"seleccionarPais"=>$this->seleccionarPais,
						"modoPaypal"=>$this->modoPaypal,
						"clienteIdPaypal"=>$this->clienteIdPaypal,
						"llaveSecretaPaypal"=>$this->llaveSecretaPaypal,
						"modoPayu"=>$this->modoPayu,
						"merchantIdPayu"=>$this->merchantIdPayu,
						"accountIdPayu"=>$this->accountIdPayu,
						"apiKeyPayu"=>$this->apiKeyPayu);

		$respuesta = ControladorComercio::ctrActualizarInformacion($datos);

		echo $respuesta;

	}

}

/*=============================================
CAMBIAR LOGOTIPO
=============================================*/	
if(isset($_FILES["imagenLogo"])){

	$logotipo = new AjaxComercio();
	$logotipo -> imagenLogo = $_FILES["imagenLogo"];
	$logotipo -> ajaxCambiarLogotipo();

}

/*=============================================
CAMBIAR ICONO
=============================================*/	
if(isset($_FILES["imagenIcono"])){

	$icono = new AjaxComercio();
	$icono -> imagenIcono = $_FILES["imagenIcono"];
	$icono -> ajaxCambiarIcono();

}

/*=============================================
CAMBIAR COLORES
=============================================*/	

if(isset($_POST["barraSuperior"])){

	$colores = new AjaxComercio();
	$colores -> barraSuperior = $_POST["barraSuperior"];
	$colores -> textoSuperior = $_POST["textoSuperior"];
	$colores -> colorFondo = $_POST["colorFondo"];
	$colores -> colorTexto = $_POST["colorTexto"];
	$colores -> ajaxCambiarColor();

}

/*=============================================
CAMBIAR COLORES
=============================================*/	

if(isset($_POST["phone_number"])){

	$contacto = new AjaxComercio();
	$contacto -> phone_number = $_POST["phone_number"];
	$contacto -> email = $_POST["email"];
	$contacto -> address = $_POST["address"];
	$contacto -> city = $_POST["city"];
	$contacto -> country = $_POST["country"];
	$contacto -> map = $_POST["map"];
	$contacto -> ajaxCambiarContacto();

}


/*=============================================
CAMBIAR REDES SOCIALES
=============================================*/	

if(isset($_POST["redesSociales"])){

	$redesSociales = new AjaxComercio();
	$redesSociales -> redesSociales = $_POST["redesSociales"];
	$redesSociales -> ajaxCambiarRedes();

}

/*=============================================
CAMBIAR SCRIPT
=============================================*/	

if(isset($_POST["apiFacebook"])){

	$script = new AjaxComercio();
	$script -> apiFacebook = $_POST["apiFacebook"];
	$script -> pixelFacebook = $_POST["pixelFacebook"];
	$script -> googleAnalytics = $_POST["googleAnalytics"];
	$script -> ajaxCambiarScript();

}

