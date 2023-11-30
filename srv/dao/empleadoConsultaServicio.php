<?php

require_once
 "lib/php/recibeFetchAll.php";

use srv\dao\AccesoBd;

function empleadoConsultaServicio()
{
 $con = AccesoBd::getCon();
 $stmt = $con->query(
  "SELECT
    ID_SERVICIO AS servId,
    TIPO_SERVICIO AS servNombre,
    DESCRIPCION_DE_SERVICIO AS servDescripcion
  FROM SERV
  GROUP BY TIPO_SERVICIO
  ORDER BY TIPO_SERVICIO"
 );
 $resultado = $stmt->fetchAll(
  PDO::FETCH_OBJ
 );
 return recibeFetchAll($resultado);
}
