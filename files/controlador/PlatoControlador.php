<?php

/* Recibe los datos desde el JS*/
$respuesta = json_decode('{"accion":"","registros":[],"error":"","total":0}');
require_once '../entidad/Plato.php';
require_once '../modelo/Conexion.php';
require_once '../modelo/PlatoDAO.php';

?>