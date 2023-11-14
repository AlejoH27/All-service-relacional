<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "srv/dao/rolConsulta.php";

use \lib\php\Servicio;

class SrvRolOpciones
extends Servicio
{

 protected
 function implementacion()
 {
  $lista = rolConsulta();
  $render = "";
  foreach ($lista as $modelo) {
   $id = htmlentities($modelo->id);
   $descripcion = htmlentities(
    $modelo->descripcion
   );
   $render .=
    "<p>
      <label style='display: flex'>
       <input type='checkbox'
         name='rolIds[]'
         value='$id'>
       <span>
        <strong>{$id}</strong>
        <br>{$descripcion}
       </span>
      </label>
     </p>";
  }
  return $render;
 }
}

$servicio = new SrvRolOpciones();
$servicio->ejecuta();
