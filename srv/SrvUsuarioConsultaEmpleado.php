<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "srv/dao/usuarioConsultaEmpleado.php";

use \lib\php\Servicio;

class SrvUsuarioConsultaEmpleado
extends Servicio
{

 protected
 function implementacion()
 {
  $lista = usuarioConsultaEmpleado();
  $render = "";
  foreach ($lista as $modelo) {
   $usuId =
    htmlentities($modelo->usuId);
  $usuNombre =
    htmlentities($modelo->usuNombre);
   $usuCue =
    htmlentities($modelo->usuCue);
   $roles = $modelo->roles === null
    || $modelo->roles === ""
    ? "<em>-- Sin roles --</em>"
    : htmlentities($modelo->roles);
   $render .=
    "<li>
      <p>
 <a href='modifica.html?id=$usuId'>
  <strong>{$usuCue}</strong>
  <br>{$usuNombre}
  <br>{$roles}</a>
      </p>
     </li>";
  }
  return $render;
 }
}

$servicio =
 new SrvUsuarioConsultaEmpleado();
$servicio->ejecuta();
