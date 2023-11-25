<?php

namespace srv\modelo;

require_once "lib/php/valida.php";
require_once
 "lib/php/validaIdNoVacio.php";
require_once
 "lib/php/validaTextoNoVacio.php";
require_once
 "srv/txt/txtFaltaElCue.php";
require_once
 "srv/txt/txtNoEsUnRol.php";

 use srv\modelo\Rol;

class Servicio
{

 public int $id;
 public string $nombre;
 public string $apellidoP; 
 public string $apellidoM;
 public string $cue;
 public string $match;
 /** @var Rol[] */
 public array $roles;

/**
  public function __construct()
  {
      $this->roles = []; // Inicializa la propiedad $roles como un arreglo vacío.
  }

  public function valida()
  {
      if ($this->cue === null || $this->cue === "") {
          throw new Exception(txtFaltaElCue());
      }
      if ($this->match === null || $this->match === "") {
          throw new Exception(txtFaltaElMatch());
      }
  }
  **/


 function valida()
 {
  $this->validaCueNoVacio();
  $this->validaRoles();

   
 }

 function validaCueNoVacio()
 {
  validaTextoNoVacio(
   $this->cue,
   txtFaltaElCue()
  );
 }

 function validaRoles()
 {
  foreach ($this->roles as $rol) {
   valida(
    $rol instanceof Rol,
    txtNoEsUnRol()
   );
   validaIdNoVacio($rol->id);
  }
 }

  
}
