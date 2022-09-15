<?php
class Conexion {
     public static function establecer(){
        require_once '../../lib/config.php';
        $conexion = new PDO(DB_DSN, DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
//el array solo en fase de desarrollo
        if (!$conexion) {
            throw new PDOException ();
        }
        $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
//seteo el modo de traer los resultados como OBJETOS. Por defecto es un arreglo
        return $conexion;
    }
}
?>