<?php

require_once
 "srv/dao/usuRolConsulta.php";

use srv\dao\AccesoBd;
use srv\modelo\Usuario;

function usuarioBusca(int $usuId)
{
 $con = AccesoBd::getCon();
 $stmt = $con->prepare(
  "SELECT
    USU_ID as id,
    USU_NOMBRE as nombre,
    USU_CUE as cue,
    USU_MATCH as match
   FROM USUARIO
   WHERE USU_ID = :usuId"
 );
 $stmt->execute([
  ":usuId" => $usuId
 ]);
 $stmt->setFetchMode(
  PDO::FETCH_CLASS,
  Usuario::class
 );
 /** @var false|Usuario */
 $usuario = $stmt->fetch();
 if ($usuario === false) {
  return false;
 } else {
  $usuario->roles =
   usuRolConsulta($usuId);
  return $usuario;
 }
}
