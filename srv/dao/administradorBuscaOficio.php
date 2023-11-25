<?php


use srv\dao\AccesoBd;
use srv\modelo\Oficio;

function administradorBuscaOficio(int $id)
{
 $con = AccesoBd::getCon();
 $stmt = $con->prepare(
  "SELECT
    OFICIO_ID AS id_oficio,
    TIPO_OFICIO AS tipo_oficio,
    DESCRIPCION_OFICIO AS descripcion_oficio 
   FROM OFICIOSv2
   WHERE OFICIO_ID = :id"
 );
 $stmt->execute([
  ":id" => $id
 ]);
 $stmt->setFetchMode(
  PDO::FETCH_CLASS,
  Oficio::class
 );
 /** @var false|Oficio */
 $oficio = $stmt->fetch();
  return $oficio;
 }
}
