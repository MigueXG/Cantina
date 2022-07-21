<?php

/**
 *
 * @author Haruzame
 */
interface DAOInterfaceReserva {
     /**
     * Busca en la BDD un registro epecificado por el Legajo y lo carga en el Objeto
     * @param int $legajo identificador del registro a buscar
     * @return \Reserva Objeto instanciado
     */
    public function cargar($id): \Reserva;
    /**
     * Guarda los datos del objeto actual como un nuevo registro de la BDD
     * @param Reserva $objeto Objeto instanciado a guardar
     * @return bool Retorna True si se inserto el registro y Falso en caso contrario
     */
    public function guardar($objeto): bool;
    /**
     * Replica los datos del objeto actual, en su correspondiente regristro de la BDD
     * @param Reserva $objeto Onjeto instanciado
     * @return bool Retorna True si se actualizo el registro y Falso en caso contrario
     */
    public function actualizar($objeto): bool;
    /**
     * Elimina el registro de la BDD correspondiente al Objeto pasado
     * @param Reserva $objeto Objeto instanciado
     * @return bool Retorna True si se elimino el registro y Falso en caso contrario
     */
    public function eliminar($objeto): bool;
    /**
     * Lista  todos los regisstros de la tabla Reserva, aplicando los filtros correspondientes
     * @param JSON $filtros Objeto JSON, los campos se deben corresponder con los definidos en el JS.
     * @return array Arreglo con los registros encontrados. Arreglo Vacio si no encuentra registros.
     */
    public function listar($filtros): array;
}
