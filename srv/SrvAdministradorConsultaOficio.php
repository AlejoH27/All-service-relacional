<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "srv/dao/administradorConsultaOficio.php";

use \lib\php\Servicio;

class SrvAdministradorConsultaOficio
extends Servicio
{

 protected
 function implementacion()
 {
  $lista = administradorConsultaOficio();
  $render = "";
  foreach ($lista as $modelo) {
   $ofiId =
    htmlentities($modelo->ofiId);
  $ofiNombre =
    htmlentities($modelo->ofiNombre);
   $ofiDescripcion =
    htmlentities($modelo->ofiDescripcion);
   
   $render .=
    "<li>
      <p>
        <a href='modificaOficio.html?id=$ofiId'>
          <strong>{$ofiId}</strong>
          <strong>{$ofiNombre}</strong>
          <br>{$ofiDescripcion}
        </a>
      </p>
    </li>";
  }
  return $render;
 }
}

$servicio =
 new SrvAdministradorConsultaOficio();
$servicio->ejecuta();
