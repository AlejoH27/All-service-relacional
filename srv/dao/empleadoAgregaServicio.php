<?php

use srv\dao\AccesoBd;
use srv\modelo\Servicio1;

function empleadoAgregaServicio(
 Servicio1 $modelo
) {
 $modelo->valida();
 $con = AccesoBd::getCon();
 $con->beginTransaction();
  $stmt = $con->prepare(
      "INSERT INTO SERV
      (TIPO_SERVICIO, DESCRIPCION_DE_SERVICIO, SERV_OFICIOS_ID_OFICIOS)
      VALUES
      (:tipo_servicio, :descripcion_de_servicio, :serv_oficios_id_oficios)"
  );
  $stmt->execute([
      ":tipo_servicio" => $modelo->tipo_servicio,
      ":descripcion_de_servicio" => $modelo->descripcion_de_servicio,
      ":serv_oficios_id_oficios" => $modelo->serv_oficios_id_oficios,
  ]);

 /* Si usas una secuencia para
  * generar el id, pasa como
  * parámetro de lastInsertId el
  * nombre de dicha secuencia. */
$modelo->id_servicio =
  $con->lastInsertId();
  //empleadoServicioAgregaOficio($modelo);
 $con->commit();
}
