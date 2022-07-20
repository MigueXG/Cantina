<?php

/**
 * Description of Pago
 *
 * @author Migue
 */
class Pago {
    /********** Atributos **********/
    private $id, $id_pedido, $pago_tipo, $pago_estado, $fecha, $usu_apellido, $usu_nombres, $producto_nombres;
    
    /********** Constructor **********/
    function __construct() {
        $this->setId(0);
        $this->setId_pedido("");
        $this->setPago_tipo("");
        $this->setPago_estado("");
        $this->setUsu_apellido("");
        $this->setUsu_nombres("");
        $this->setProducto_nombres("");
        $this->setFecha("");
    }
    
    /********** Getters **********/
    public function getId(): int {
        return $this->id;
    }
    
    public function getId_pedido() {
        return $this->id_pedido;
    }

    public function getPago_tipo() {
        return $this->pago_tipo;
    }
    
    public function getPago_estado() {
        return $this->pago_estado;
    }

    public function getFecha() {
        return $this->fecha;
    }
    
    public function getUsu_apellido() {
        return $this->usu_apellido;
    }

    public function getUsu_nombres() {
        return $this->usu_nombres;
    }

    public function getProducto_nombres() {
        return $this->producto_nombres;
    }

    
    /********** Setters **********/
    public function setId($id) {
        //if(is_integer($id) && ($id > 0)) $this->id = $id;
        //else $this->id = 0;
        $this->id = (is_integer($id) && ($id > 0)) ? $id: 0;
    }
    
    public function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    public function setPago_tipo($pago_tipo) {
        $this->pago_tipo = $pago_tipo;
    }
    
    public function setPago_estado($pago_estado) {
        $this->pago_estado = $pago_estado;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    
    public function setUsu_apellido($usu_apellido) {
        $this->usu_apellido = $usu_apellido;
    }

    public function setUsu_nombres($usu_nombres) {
        $this->usu_nombres = $usu_nombres;
    }

    public function setProducto_nombres($producto_nombres) {
        $this->producto_nombres = $producto_nombres;
    }

    
    /********** Métodos **********/
    
    public function toArray(): array{
        $salida = array(
            "id" => $this->getId(),
            "idPedido" => $this->getId_pedido(),
            "tipo" => $this->getPago_tipo(),
            "estado" => $this->getPago_estado(),
            "fecha" => $this->getFecha(),
            "usu_apellido" => $this->getUsu_apellido(),
            "usu_nombres" => $this->getUsu_nombres(),
            "producto_nombres" => $this->getProducto_nombres()
        );
        return $salida;
    }
    
    public function toJSON() {
        $json = json_decode("{}");
        $json->{"id"} = $this->getId();
        $json->{"idPedido"} = $this->getId_pedido();
        $json->{"tipo"} = $this->getPago_tipo();
        $json->{"estado"} = $this->getPago_estado();
        $json->{"fecha"} = $this->getFecha();
        $json->{"usu_apellido"} = $this->getUsu_apellido();
        $json->{"usu_nombres"} = $this->getUsu_nombres();
        $json->{"producto_nombres"} = $this->getProducto_nombres();
        return $json;
    }
}
