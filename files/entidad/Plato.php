<?php

/**
 * Description of menu
 *
 * @author Haruzame
 */
class Plato {
    /********** ATRIBUTOS *********/
    private $id, $nombre, $descripcion, $imagen, $precioA, $precioP, $estado, $disponibilidad, $cantidad;
    
    /*********** CONSTRUCTOR ****************/
    public function __construct() {
        $this->setId(0);
        $this->setNombre("");
        $this->setDescripcion("");
        $this->setImagen("");
        $this->setPrecioA("");
        $this->setPrecioP("");
        $this->setEstado("");
        $this->setDisponibilidad("");
        $this->setCantidad(0);
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

    public function setPrecioA($precioA): void {
        $this->precioA = $precioA;
    }

    public function setPrecioP($precioP): void {
        $this->precioP = $precioP;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setDisponibilidad($disponibilidad): void {
        $this->disponibilidad = $disponibilidad;
    }

    public function setCantidad($cantidad): void {
        $this->cantidad = $cantidad;
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

    public function getPrecioA() {
        return $this->precioA;
    }

    public function getPrecioP() {
        return $this->precioP;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    /********** Métodos **********/
    
    public function toArray(): array{
        $salida = array(
            "id" => $this->getId(),
            "nombre" => $this->getNombre(),
            "descripcion" => $this->getDescripcion(),
            "imagen" => $this->getImagen(),
            "precioa" => $this->getPrecioA(),
            "preciop" => $this->getPrecioP(),
            "estado" => $this->getEstado(),
            "disponibilidad" => $this->getDisponibilidad(),
            "cantidad" => $this->getCantidad(),
        );
        return $salida;
    }
    
    public function toJSON() {
        $json = json_decode("{}");
        $json->{"id"} = $this->getId();
        $json->{"nombre"} = $this->getNombre();
        $json->{"descripcion"} = $this->getDescripcion();
        $json->{"imagen"} = $this->getImagen();
        $json->{"precioA"} = $this->getPrecioA();
        $json->{"precioP"} = $this->getPrecioP();
        $json->{"estado"} = $this->getEstado();
        $json->{"disponibilidad"} = $this->getDisponibilidad();
        $json->{"cantidad"} = $this->getCantidad();
        return $json;
    }


}
