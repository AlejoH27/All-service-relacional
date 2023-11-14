<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "lib/php/leeSinEspaciosInFin.php";
require_once
 "lib/php/leeArray.php";
require_once
 "srv/creaArrayDeRoles.php";
require_once
 "srv/dao/usuarioAgrega.php";

use \lib\php\Servicio;
use \srv\modelo\Usuario;

class SrvUsuarioAgrega
extends Servicio
{

 protected
 function implementacion()
 {
  $usuario = new Usuario();
  $usuario->nombre =
   leeSinEspaciosInFin("nombre");
  $usuario->cue =
   leeSinEspaciosInFin("cue");
  $usuario->match =
   leeSinEspaciosInFin("match");
  $rolIds = leeArray("rolIds");
  $usuario->roles =
   creaArrayDeRoles($rolIds);
  usuarioAgrega($usuario);
  return $usuario;
 }
}

$servicio = new SrvUsuarioAgrega();
$servicio->ejecuta();
