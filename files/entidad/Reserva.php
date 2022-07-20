<?php

/**
 * Description of Turno
 *
 * @author Migue
 */
    class Reserva{
        
    /********** Atributos **********/
    private $id, $id_usuario, $fecha, $hora, $cancha, $quincho, $tipo, $monto;
    
    //Nota: tipo seria Dia o Mensual
    
    /********** Constructor **********/
    function __construct() {
        $this->setId(0);
        $this->setIdUsuario(0);
        $this->setFecha("");
        $this->setHora("");
        $this->setCancha("");
        $this->setQuincho("");
        $this->setTipo("");
        $this->setMonto("");
    }
    
    /********** Getters **********/
    public function getId(): int {
        return $this->id;
    }
    public function getIdUsuario(): string{
        return $this->id_usuario;
    }
    public function getFecha(): string{
        return $this->fecha;
    }
    public function getHora(): string{
        return $this->hora;
    }
    public function getCancha(): string{
        return $this->cancha;
    }
    public function getQuincho(): string{
        return $this->quincho;
    }
    public function getTipo(): string{
        return $this->tipo;
    }
    public function getMonto(): string{
        return $this->monto;
    }

    /********** Setters **********/
    public function setId($id) {
        $this->id = (is_integer($id) && ($id > 0)) ? $id: 0;
    }
    public function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setHora($hora){
        $this->hora = $hora;
    }
    public function setCancha($cancha){
        $this->cancha = $cancha;
    }
    public function setQuincho($quincho){
        $this->quincho = $quincho;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setMonto($monto){
        $this->monto = $monto;
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