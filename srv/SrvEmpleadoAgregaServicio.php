<?php

require_once __DIR__ .
 "/../lib/php/autoload.php";
require_once
 "lib/php/leeSinEspaciosInFin.php";
require_once
 "lib/php/leeArray.php";
require_once
 "lib/php/leeBytes.php";
require_once
 "srv/creaArrayDeRoles.php";
require_once
 "srv/creaArrayDeOficios.php";
require_once
 "srv/dao/empleadoAgregaServicio.php";
require_once
 "srv/dao/oficioConsulta.php";  // Asegúrate de incluir el archivo que contiene la función de consulta de oficios

use \lib\php\Servicio;
use \srv\modelo\Servicio1;

class SrvEmpleadoAgregaServicio extends Servicio
{
    protected function implementacion()
    {
      $servicio1 = new Servicio1();
      $servicio1->tipo_servicio = leeSinEspaciosInFin("tipo_servicio");
      $servicio1->descripcion_de_servicio = leeSinEspaciosInFin("descripcion_de_servicio");
      $servicio1->serv_oficios_id_oficios = leeSinEspaciosInFin("ofcioId");
      
      empleadoAgregaServicio($servicio1);
      return $servicio1;
    }
}

$servicio = new SrvEmpleadoAgregaServicio();
$servicio->ejecuta();
