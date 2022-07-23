<?php

/**
 * Description of DAO
 *
 * @author Haruzame
 */
class DAO {
    /************ATRIBUTOS************/
    private $error, $registrosEncontrados;
    protected $conexion;
    
    /************CONSTRUCTOR************/
    function __construct($conexion) {
        $this->conexion = $conexion;
        $this->setError("");
        $this->setRegistrosEncontrados(0);
                
    }
    
    /************GETTERS************/
    public function getError() {
        return $this->error;
    }

    public function getRegistrosEncontrados() {
        return $this->registrosEncontrados;
    }
    
    /************SETTERS************/
    public function setError($error) {
        $this->error = (is_String($error)) ? trim($error) : ""; //trim elimina los espacios en blanco al principio y al final del STRING
    }
    public function setRegistrosEncontrados($registrosEncontrados) {
        $this->registrosEncontrados = (is_integer($registrosEncontrados)) ? $registrosEncontrados : 0;
    }
    
}
?>
