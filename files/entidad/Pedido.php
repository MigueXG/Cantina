<?php

/**
 * Description of Pedido
 *
 * @author Migue
 */
class Pedido {
    /********** Atributos **********/
    private $id, $id_cliente, $id_producto, $pedido_fecha, $pedido_hora, $producto_nombre;
    
    /********** Constructor **********/
    function __construct() {
        $this->setId(0);
        $this->setId_cliente("");
        $this->setId_producto("");
        $this->setPedido_fecha("");
        $this->setPedido_hora("");
        $this->setProducto_nombre("");
    }
    
    /********** Getters **********/
    public function getId(): int {
        return $this->id;
    }
    
    public function getId_cliente() {
        return $this->id_cliente;
    }

    public function getPedido_fecha() {
        return $this->pedido_fecha;
    }

    public function getPedido_hora() {
        return $this->pedido_hora;
    }
    
    public function getId_producto() {
        return $this->id_producto;
    }
    
    public function getProducto_nombre() {
        return $this->producto_nombre;
    }
    
        /********** Setters **********/
    public function setId($id) {
        //if(is_integer($id) && ($id > 0)) $this->id = $id;
        //else $this->id = 0;
        $this->id = (is_integer($id) && ($id > 0)) ? $id: 0;
    }
    
    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function setPedido_fecha($pedido_fecha) {
        $this->pedido_fecha = $pedido_fecha;
    }

    public function setPedido_hora($pedido_hora) {
        $this->pedido_hora = $pedido_hora;
    }
    
    public function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    public function setProducto_nombre($producto_nombre) {
        $this->producto_nombre = $producto_nombre;
    }
    
    /********** Métodos **********/
    
    public function toArray(): array{
        $salida = array(
            "id" => $this->getId(),
            "idCliente" => $this->getId_cliente(),
            "idProducto" => $this->getId_producto(),
            "fecha" => $this->getPedido_fecha(),
            "hora" => $this->getPedido_hora(),
            "producto_nombre" => $this->getProducto_nombre(),
        );
        return $salida;
    }
    
    public function toJSON() {
        $json = json_decode("{}");
        $json->{"id"} = $this->getId();
        $json->{"idCliente"} = $this->getId_cliente();
        $json->{"idProducto"} = $this->getId_producto();
        $json->{"fecha"} = $this->getPedido_fecha();
        $json->{"hora"} = $this->getPedido_hora();
        $json->{"pedido_nombre"} = $this->getProducto_nombre();
        return $json;
    }
}
