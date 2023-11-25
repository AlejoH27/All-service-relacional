<?php

use srv\modelo\Usuario;

/** @return Rol[] */
function creaArrayDeOficios(
 array $usuarioIds
): array {
 if (sizeof($usuarioIds) === 0) {
  return [];
 } else {
  /** @var Rol[] $roles */
  $usuarios = [];
  foreach ($usuarioIds as $usuarioId) {
   $usu = new Usuario();
   $usu->id = $usuarioId;
   $usuarios[] = $usu;
  }
  return $usuarios;
 }
}

