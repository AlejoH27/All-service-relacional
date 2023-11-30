<?php

require_once "srv/dao/usuRolAgrega.php";
require_once "srv/dao/usuRolElimina.php";

use srv\dao\AccesoBd;
use srv\modelo\Servicio1;

function empleadoModificaServicio(Servicio1 $modelo)
{
    $modelo->valida();
    $con = AccesoBd::getCon();
    $con->beginTransaction();
    $stmt = $con->prepare(
        "UPDATE SERV
        SET TIPO_SERVICIO = :tipo_servicio,
            DESCRIPCION_DE_SERVICIO = :descripcion_de_servicio
        WHERE ID_SERVICIO = :id_servicio"
    );
    $stmt->execute([
        ":id_servicio" => $modelo->id_servicio,
        ":tipo_servicio" => $modelo->tipo_servicio,
        ":descripcion_de_servicio" => $modelo->descripcion_de_servicio
    ]);
    // Elimina las líneas relacionadas con roles
    // usuRolElimina($modelo->id);
    // usuRolAgrega($modelo);
    $con->commit();
}
