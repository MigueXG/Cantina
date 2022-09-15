<?php
require_once 'DAO.php';
require_once 'DAOInterfacePlatos.php';
require_once '../entidad/Plato.php';
/**
 * Description of PlatoDAO
 *
 * @author Haruzame
 */
class PlatoDAO extends DAO implements DAOInterfacePlatos {
    public function actualizar($objeto): bool {
        
    }

    public function cargar($id): \Platos {
        
    }

    public function eliminar($objeto): bool {
        
    }

    public function guardar($objeto): bool {
        $this->setError("");
        $resultado = false;
        $sql = 'SELECT * FROM platos WHERE p_nombre = :nombre';
        if ($stmt = $this->conexion->prepare($sql)){
            if($stmt->execute(array("nombre" => $objeto->getNombre()))){
                if($stmt->rowCount() == 1){
                   $this->setError("Plato Existente");
                   $resultado = false;
                }else{ 
                    $sql = 'insert into platos values(null,:nombre,:descripcion,:imagen,:tipo,:estado);';
                    if ($stmt = $this->conexion->prepare($sql)) {
                        if ($stmt->execute(array("nombre" => $objeto->getNombre(),"descripcion" => $objeto->getDescripcion(),"imagen"=>$objeto->getImagen(), "tipo" => $objeto->getTipo(), "estado"=>$objeto->getEstado()))) {
                            $objeto->setId((int) $this->conexion->lastInsertId());
                            $resultado = true;
                        } else {
                            $this->setError($stmt->errorInfo()[2]);
                        }
                        $stmt = null;
                    } else {
                        $this->setError($this->conexion->errorInfo()[2]);
                    }
                }
                
       return $resultado;
            }
        }
    }

    public function listar($filtros): array {
        
    }

}
