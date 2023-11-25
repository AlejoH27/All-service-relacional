<?php

namespace srv\dao;

require_once "srv/dao/bdCrea.php";
require_once
 "srv/dao/rolConsulta.php";
require_once
 "srv/dao/rolAgrega.php";
require_once "srv/txt/"
 . "txtAdministraElSistema.php";

require_once
 "srv/const/ROL_CLIENTE.php";
require_once
 "srv/const/ROL_ADMINISTRADOR.php";
require_once
 "srv/const/ROL_EMPLEADO.php";


require_once "srv/txt/"
 . "txtAdministraValidaciones.php";
require_once
 "srv/txt/txtRealizaCompras.php";
require_once
 "srv/txt/txtRealizaTrabajos.php";

use \PDO;
use srv\modelo\Rol;
use srv\modelo\Usuario;
use srv\modelo\Oficio;

class AccesoBd
{

 private static ?PDO $con = null;

 static function getCon(): PDO
 {
  if (self::$con === null) {
   self::$con = self::conecta();
   self::prepara(self::$con);
  }
  return self::$con;
 }

 private static
 function conecta(): PDO
 {
  return new PDO(
   // cadena de conexión
   "sqlite:srvamuchos.db",
   // usuario
   null,
   // contraseña
   null,
   [PDO::ATTR_ERRMODE
   => PDO::ERRMODE_EXCEPTION]
  );
 }

 private static
 function prepara(PDO $con)
 {
  bdCrea($con);
  $roles = rolConsulta();
  if (sizeof($roles) === 0) {

     $emple = new Rol();
     $emple->id = ROL_EMPLEADO;
     $emple->descripcion =
     txtRealizaTrabajos();
     rolAgrega($emple);

     $cliente = new Rol();
     $cliente->id = ROL_CLIENTE;
     $cliente->descripcion =
     txtRealizaCompras();
     rolAgrega($cliente);
    
     /*$administrador = new Rol();
     $administrador->id = ROL_ADMINISTRADOR;
     $administrador->descripcion =
     txtAdministraElSistema();
     rolAgrega($administrador);*/
    

  

   $rol = new Rol();
   $rol->id = "Administrador";
   $rol->descripcion =
    txtAdministraElSistema();
   rolAgrega($rol);
    
    /**
   $rol = new Rol();
   $rol->id = "Cliente";
   $rol->descripcion =
    txtRealizaCompras();
   rolAgrega($rol);
    **/
  }
 }
}
