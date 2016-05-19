<?php
/**
 * Description of Mostrarcd
 *
 * @author 2DAW
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Mostrarcd extends CI_Controller{
    
       public function __construct() {
        parent::__construct();
        $this->load->helper('descuentos_helper');
        $this->load->model('M_Cd'); 
//        $this->load->library('Carro', 0, 'myCarrito');
    }

    
    /**
     * Muestra la camiseta de forma detallada
     * @param Int $idCamiseta ID de la camiseta
     */
    public function ver($idcd) {

        //Información de camiseta
        if ($this->M_Cd->SiSeDebeMostarProducto($idcd)) {

            $cd = $this->M_Cd->getProducto($idcd); //Conseguimos la camiseta a mostrar

            $categoria = $this->M_Cd->getInfoCategoriaFromProducto($cd['idCategoria']); //Conseguimos la categoría

            $cdrelacionados = $this->M_Cd->getProductosRelacionadasFromCategoria($cd['idCategoria'], $cd['idCamiseta']); //Camisetas relacionadas

            $cuerpo = $this->load->view('V_Detalles', Array('cd' => $cd, 'categoria' => $categoria,
                'titulo' => $cd['descripcion'], 'cdrelacionados' => $cdrelacionados), true);
//
//            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'homeactive' => 'active'));
            $this->load->view('V_Detalles');
        } else {
            $cuerpo = $this->load->view('V_404', Array('' => ''), true);
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'homeactive' => 'active', 'titulo' => 'Error'));
        }
    }
}
