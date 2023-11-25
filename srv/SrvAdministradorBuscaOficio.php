<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "lib/php/leeEntero.php";
require_once
 "srv/dao/administradorBuscaOfico.php";
require_once "srv/txt/"
 . "txtOficioNoEncontrado.php";

use \lib\php\Servicio;

class SrvAdministradorBuscaOficio
extends Servicio
{

 protected
 function implementacion()
 {
  $id = leeEntero("id_oficio");
  $modelo = administradorBuscaOficio($id);
  if ($modelo === false) {
   throw new Exception(
    txtOficioNoEncontrado()
   );
  }
  
  return [
   "modelo" => $modelo
  ];
 }
}

$servicio = new SrvAdministradorBuscaOficio();
$servicio->ejecuta();
