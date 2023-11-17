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
    "<!--<li>
      <p>
 <a href='modifica.html?id=$usuId'>
  <strong>{$usuCue}</strong>
  <br>{$usuNombre}
  <br>{$roles}</a>
      </p>
     </li>-->
     
<div class='row'>
     <div class='col-md-4 offset-md-4 profile-card'>
         <div class='imageE'>
             <img src='images/empleado.png' alt='Empleado'>
         </div>
         <div class='text-data'>
             <span class='name'>{$usuNombre}</span>
             <span class='job'>{$usuCue}</span>
             <span class='job'><b>{$roles}</b></span>
         </div>
         <div class='buttons'>
             <form>
                 <input type='hidden' name=''>
                 <button class='button'>Leer más</button>
             </form>
             <!--
             <a href='indexUsu.php?pagina=contactar&id_abogado=''>
                 <button class='button'>Mensaje</button>
             </a>-->
         </div>
     </div>

 </div>

     
     ";
  }
  return $render;
 }
}

$servicio =
 new SrvUsuarioConsultaEmpleado();
$servicio->ejecuta();
