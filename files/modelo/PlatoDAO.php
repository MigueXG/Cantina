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

    public function cargar($id): \Plato {
        $plato = new Plato();
        
        if(!is_integer($id) || ($id <= 0)){
            $this->setError("El identificador ingresado es invalido.");
            return $plato;
        }
        $sql = 'SELECT * FROM platos WHERE id_plato = :id;';
        if ($stmt = $this->conexion->prepare($sql)) {
            if ($stmt->execute(array("id" => $id))) {
                if ($stmt->rowCount() == 1) {
                    $registro = $stmt->fetch();
                    $plato->setId((int) $registro->id_plato);
                    $plato->setNombre($registro->p_nombre);
                    $plato->setDescripcion($registro->p_descripcion);
                    $plato->setImagen($registro->p_foto);
                    $plato->setTipo($registro->p_tipo);
                    $plato->setEstado($registro->p_estado);
                }
            } else {
                $this->setError($stmt->errorInfo()[2]);
            }
            $stmt = null;
        } else {
            $this->setError($this->conexion->errorInfo()[2]);
        }

        return $plato;
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
        $registros = array();
        $this->setRegistrosEncontrados(0);
        $this->setError(0);
        
        $sql = 'SELECT * FROM platos WHERE p_tipo = "Menu"';
        
        if($stmt = $this->conexion->prepare($sql)){
            if($stmt->execute()){
                $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($stmtTotal = $this->conexion->prepare("SELECT FOUND_ROWS();")){
                    if($stmtTotal->execute()){
                        $total = $stmtTotal->fetch(PDO::FETCH_NUM);
                        $this->setRegistrosEncontrados((int)$total[0]);
                        unset($total);
                    }
                    $stmtTotal = null;
                }else{
                    $this->setError($this->conexion->errorInfo()[2]);
            }   
        }else{
            $this->setError($stmt->errorInfo()[2]);
        }$stmt = null;
        }else{
            $this->setError($this->conexion->errorInfo()[2]);
        }
        return $registros;
    }

}
