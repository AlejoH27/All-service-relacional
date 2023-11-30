<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "srv/dao/empleadoConsultaServicio.php";

use \lib\php\Servicio;

class SrvEmpleadoConsultaServicio
extends Servicio
{

 protected
 function implementacion()
 {
  $lista = empleadoConsultaServicio();
  $render = "";
  foreach ($lista as $modelo) {
   $servId =
    htmlentities($modelo->servId);
  $servNombre =
    htmlentities($modelo->servNombre);
   $servDescripcion =
    htmlentities($modelo->servDescripcion);
   
   $render .=
    "<li>
      <p>
        <a href='modificaServicioEmpleado.html?id_servicio=$servId'>
          <strong>{$servId}</strong>
          <strong>{$servNombre}</strong>
          <br>{$servDescripcion}
        </a>
      </p>
    </li>";
  }
  return $render;
 }
}

$servicio =
 new SrvEmpleadoConsultaServicio();
$servicio->ejecuta();
