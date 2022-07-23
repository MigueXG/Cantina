<?php

/**
 * Description of Turno
 *
 * @author Migue
 */
    class Reserva{
        
    /********** Atributos **********/
    private $id, $legajo, $id_plato, $nombre, $apellido, $fecha, $estado, $llevar;
    
    //Nota: tipo seria Dia o Mensual
    
    /********** Constructor **********/
    public function __construct() {
        $this->setId(0);
        $this->setLegajo(0);
        $this->setId_plato(0);
        $this->setNombre("");
        $this->setApellido("");
        $this->setFecha("");
        $this->setEstado("");
        $this->setLlevar("");
    }

    
    /********** Getters **********/
    public function getId() {
        return $this->id;
    }

    public function getLegajo() {
        return $this->legajo;
    }

    public function getId_plato() {
        return $this->id_plato;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getLlevar() {
        return $this->llevar;
    }

    
    /********** Setters **********/
    public function setId($id): void {
        $this->id = (is_integer($id) && ($id > 0)) ?$id : 0;
    }

    public function setLegajo($legajo): void {
        $this->legajo = $legajo;
    }

    public function setId_plato($id_plato): void {
        $this->id_plato = (is_integer($id) && ($id > 0)) ?$id : 0;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setLlevar($llevar): void {
        $this->llevar = $llevar;
    }

    /********** Métodos **********/
    
    public function toArray(): array{
        $salida = array(
            "id" => $this->getId(),
            "id_usuario" => $this->getIdUsuario(),
            "fecha" => $this->getFecha(),
            "hora" => $this->getHora(),
            "cancha" => $this->getCancha(),
            "quincho" => $this->getQuincho(),
            "tipo" => $this->getTipo(),
            "monto" => $this->getMonto(),
        );
        return $salida;
    }
    
    public function toJSON() {
        $json = json_decode("{}");
        $json->{"id"} = $this->getId();
        $json->{"id_usuario"} = $this->getIdUsuario();
        $json->{"fecha"} = $this->getFecha();
        $json->{"hora"} = $this->getHora();
        $json->{"cancha"} = $this->getCancha();
        $json->{"quincho"} = $this->getQuincho();
        $json->{"tipo"} = $this->getTipo();
        $json->{"monto"} = $this->getMonto();
        return $json;
    }
}
?>