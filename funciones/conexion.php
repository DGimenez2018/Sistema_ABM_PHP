<?php

$localServer = $_SERVER['HTTP_HOST'];

const SERVER    = 'localhost';
const USUARIO   = 'root';
const CLAVE     = 'administrador';
const BASE      = 'catalogo';
	
const XAMPPSERVER    = 'localhost';
const XAMPPUSUARIO   = 'root';
const XAMPPCLAVE     = 'administrador';
const XAMPPBASE      = 'catalogo';


if ($localServer == 'localhost')
{
	function conectar()
	{
		$link = mysqli_connect(
			XAMPPSERVER,
			XAMPPUSUARIO,
			XAMPPCLAVE,
			XAMPPBASE
		);
		return $link;
	}
}
else
{
	function conectar()
	{
		$link = mysqli_connect(
			SERVER,
			USUARIO,
			CLAVE,
			BASE
		);
		return $link;
	}
}