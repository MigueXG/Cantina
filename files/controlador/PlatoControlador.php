<?php

/* Recibe los datos desde el JS*/
$respuesta = json_decode('{"accion":"","registros":[],"error":"","total":0}');
require_once '../entidad/Plato.php';
require_once '../modelo/Conexion.php';
require_once '../modelo/PlatoDAO.php';
//ALTA CON CARGA DE IMAGENES
if (!isset($_POST['data'])){
    if(($_POST['ordendealta']) === 'ALTA'){
        
    $respuesta->{"accion"} = "ALTA";
      try{
          $con = Conexion::establecer();
          $ni = uniqid()."-".$_FILES['archimagen']['name'];
          $cd = $_SERVER['DOCUMENT_ROOT'].'/Cantina/img/';
          $plato = new Plato();
          $plato->setId(0);
          $plato->setNombre($_POST['nomplato']);
          $plato->setCantidad($_POST['cantplato']);
          $plato->setDescripcion($_POST['descplato']);
          $plato->setTipo($_POST['seltipo']);
          $plato->setImagen($ni);
          $plato->setEstado(1);
          $PlatoDAO = new PlatoDAO($con);
          if (($_FILES["archimagen"]["type"] === "image/pjpeg")
                  || ($_FILES["archimagen"]["type"] === "image/jpeg")
                  || ($_FILES["archimagen"]["type"] === "image/png")
                  || ($_FILES["archimagen"]["type"] === "image/gif")) {

                  if($PlatoDAO->guardar($plato)){

                          $respuesta->{"registros"} = $plato->toJSON();
                           if (!move_uploaded_file($_FILES['archimagen']['tmp_name'],$cd.$ni)){
                               $respuesta->{"error"} = "No se pudo cargar la imagen";
                           }
                      }
                      else{
                          $respuesta->{"error"} = $PlatoDAO->getError();
                      }

          }else{
               $respuesta->{"error"} = "La extension del archivo no es valida";
          }

          $con = null;
      } catch (PDOException $ex) {
          echo $ex->getMessage();
      }
    }
}
echo json_encode($respuesta);

?>