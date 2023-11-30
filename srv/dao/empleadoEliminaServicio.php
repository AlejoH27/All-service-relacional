<?php

use srv\dao\AccesoBd;

function empleadoEliminaServicio(int $id_servicio)
{
 $con = AccesoBd::getCon();
 $stmt = $con->prepare(
  "DELETE FROM SERV
   WHERE ID_SERVICIO = :id_servicio"
 );
 $stmt->execute([":id_servicio" => $id_servicio]);
}
