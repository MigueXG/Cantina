<?php

/**
 * Description of Usuario
 *
 * @author Migue
 */
class Usuario {
    
    /********** Atributos **********/
    private $id, $apellido, $nombres, $dni, $telefono, $correo, $clave, $tipo, $estado, $calificacion, $descripcion, $fechaAlta;
    
    /********** Constructor **********/
    function __construct() {
        $this->setId(0);
        $this->setApellido("");
        $this->setNombres("");
        $this->setDni("");
        $this->setTelefono("");
        $this->setCorreo("");
        $this->setClave("");
        $this->setTipo("");
        $this->setEstado("");
        $this->setFechaAlta("");
        $this->setCalificacion("");
        $this->setDescripcion("");
    }
    
    /********** Getters **********/
    public function getId(): int {
        return $this->id;
    }
    public function getApellido(): string {
        return $this->apellido;
    }
    public function getNombres(): string {
        return $this->nombres;
    }
    public function getDni(): string {
        return $this->dni;
    }
    public function getTelefono(): string {
        return $this->telefono;
    }
    public function getCorreo(): string {
        return $this->correo;
    }
    public function getClave(): string {
        return $this->clave;
    }
    public function getTipo(): string {
        return $this->tipo;
    }
    public function getEstado(): string {
        return $this->estado;
    }
    public function getFechaAlta(): string {
        return $this->fechaAlta;
    }
    public function getCalificacion() {
        return $this->calificacion;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }

 
    /********** Setters **********/
    public function setId($id) {
        //if(is_integer($id) && ($id > 0)) $this->id = $id;
        //else $this->id = 0;
        $this->id = (is_integer($id) && ($id > 0)) ? $id: 0;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }
    
    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
    
    public function setClave($clave) {
        //Longitud igual 32, porque esta encriptada con MD5.
        $this->clave = (is_string($clave) && (strlen($clave) == 32)) ? $clave: "";
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }
    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

 
    /********** Métodos **********/
    
    public function toArray(): array{
        $salida = array(
            "id" => $this->getId(),
            "apellido" => $this->getApellido(),
            "nombres" => $this->getNombres(),
            "dni" => $this->getDni(),
            "telefono" => $this->getTelefono(),
            "correo" => $this->getCorreo(),
            "tipo" => $this->getTipo(),
            "estado" => $this->getEstado(),
            "fechaAlta" => $this->getFechaAlta(),
            "calificacion" => $this->getCalificacion(),
            "descripcion" => $this->getDescripcion(),
        );
        return $salida;
    }
    
    public function toJSON() {
        $json = json_decode("{}");
        $json->{"id"} = $this->getId();
        $json->{"clave"} = $this->getClave();
        $json->{"apellido"} = $this->getApellido();
        $json->{"nombres"} = $this->getNombres();
        $json->{"dni"} = $this->getDni();
        $json->{"telefono"} = $this->getTelefono();
        $json->{"correo"} = $this->getCorreo();
        $json->{"tipo"} = $this->getTipo();
        $json->{"estado"} = $this->getEstado();
        $json->{"calificacion"} = $this->getCalificacion();
        $json->{"fechaAlta"} = $this->getFechaAlta();
        $json->{"descripcion"} = $this->getDescripcion();
        return $json;
    }
}
?>