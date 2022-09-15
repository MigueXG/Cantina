<?php

/**
 * Description of menu
 *
 * @author Haruzame
 */
class Plato {
    /********** ATRIBUTOS *********/
    private $id, $nombre, $descripcion, $imagen, $cantidad, $estado, $tipo;
    
    /*********** CONSTRUCTOR ****************/
    public function __construct() {
        $this->setId(0);
        $this->setNombre("");
        $this->setDescripcion("");
        $this->setTipo("");
        $this->setImagen("");
        $this->setCantidad(0);
        $this->setEstado(0);
    }
    
    /*************** SETTERS ******************/
    
    public function setId($id): void {
        $this->id = (is_integer($id) && ($id > 0)) ?$id : 0;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }

    public function setCantidad($cantidad): void {
        $this->cantidad = $cantidad;
    }
    public function setEstado($estado): void {
        $this->estado = $estado;
    }
    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    
    
    /********************* GETTERS *****************/
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getCantidad() {
        return $this->cantidad;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function getTipo() {
        return $this->tipo;
    }

    

    /********** Métodos **********/
    
    public function toArray(): array{
        $salida = array(
            "id" => $this->getId(),
            "nombre" => $this->getNombre(),
            "descripcion" => $this->getDescripcion(),
            "imagen" => $this->getImagen(),
            "cantidad" => $this->getCantidad(),
            "tipo" => $this->getTipo(),
            "estado" => $this->getEstado(),
        );
        return $salida;
    }
    
    public function toJSON() {
        $json = json_decode("{}");
        $json->{"id"} = $this->getId();
        $json->{"nombre"} = $this->getNombre();
        $json->{"descripcion"} = $this->getDescripcion();
        $json->{"imagen"} = $this->getImagen();
        $json->{"cantidad"} = $this->getCantidad();
        $json->{"tipo"} = $this->getTipo();
        $json->{"estado"} = $this->getEstado();
        return $json;
    }


}
