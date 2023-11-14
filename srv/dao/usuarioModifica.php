<?php

require_once
 "srv/dao/usuRolAgrega.php";
require
 "srv/dao/usuRolElimina.php";

use srv\dao\AccesoBd;
use srv\modelo\Usuario;

function usuarioModifica(
 Usuario $modelo
) {
 $modelo->valida();
 $con = AccesoBd::getCon();
 $con->beginTransaction();
 $stmt = $con->prepare(
  "UPDATE USUARIO
   SET USU_CUE = :cue,
       USU_MATCH = :match
   WHERE USU_ID = :id"
 );
 $stmt->execute([
  ":id" => $modelo->id,
  ":cue" => $modelo->cue,
  ":match" => $modelo->match
 ]);
 usuRolElimina($modelo->id);
 usuRolAgrega($modelo);
 $con->commit();
}
