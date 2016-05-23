<?php

/**
 *  MODELO de la consultas relacionadas con el carrito.
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cart extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }

    /**
     * Devuelve los datos de una camiseta para usarlo en el carrito
     * @param Int $id ID de la camiseta
     * @return Array
     */
    public function getDataCamiseta($id) {

        $query = $this->db->query("SELECT idProcuto, precio, descuento, descripcion, imagen "
                                    . "FROM porducto "
                                        . "WHERE idProcuto = $id; ");
        
        return $query->row_array();
    }
    
    /**
     * Devuelve el stock de una camiseta
     * @param Int $id ID de la camiseta
     * @return Int
     */
    public function getStock($id){
        $query = $this->db->query("SELECT stock "
                                    . "FROM porducto "
                                        . "WHERE idProcuto = $id; ");
        
        return $query->row_array()['stock'];
        
    }
}
