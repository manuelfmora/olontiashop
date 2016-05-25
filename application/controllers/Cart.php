<?php

/**
 * CONTROLADOR en el que se lleva a cabo todo lo relacionado con la compra de productos.
 *
 * @author Manuel Mora
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    public function __construct() {
        parent::__construct();       
        $this->load->library('L_Cart', 0, 'myCart');
    }

    /**
     * Muestra el carrito con los productos que se quieren comprar
     */
    public function index() {
       
        $msg_error = "";
        $data = array();

        //Borra los mensajes de error
        $this->BorrarMensajesError();

        //BOTÓN GUARDAR CAMBIOS
        if (isset($_POST['guardar'])) {
           //Si existen artículos guardados
            if ($this->myCart->articulos_total() > 0) {

                foreach ($this->myCart->get_content() as $items) :
                    $stock = $this->M_Cart->getStock($items['id']); //Guardamos su stock

                    if ($stock >= $_POST["cantidad"][$items['id']]) {//Si existe stock disponible para la venta, se actualiza el carrito
                                               $articulo = array(
                            "id" => $items['id'],
                            "cantidad" => $_POST["cantidad"][$items['id']],
                            "precio" => $items['precio'],
                            "nombre" => $items['nombre'],
                            'opciones' => array('imagen' => $items['opciones']['imagen'], 'error' => '')
                        );
                        $this->myCart->actualizar($articulo);
                    } else if ($stock < $_POST["cantidad"][$items['id']]) {//sino mostramos mensaje de error
                        $msg_error = '<div class="alert msgerror"> <b> ¡Error! </b>Stock máximo superado</div>';

                        $articulo = array(
                            "id" => $items['id'],
                            "cantidad" => $items['cantidad'],
                            "precio" => $items['precio'],
                            "nombre" => $items['nombre'],
                            'opciones' => array('imagen' => $items['opciones']['imagen'],
                            'error' => '<div class="iconoerror"><span class="glyphicon glyphicon-warning-sign"></span></div>')
                        );


                        $this->myCart->actualizar($articulo);
                    }
                endforeach;
            }
        }
        $cuerpo = $this->load->view('V_Cart', Array('msg_error' => $msg_error), true);
        $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'titulo' => 'Carrito', 'carritoactive' => 'active'));
    }

    /**
     * Borra un  producto del carrito
     * @param Int $id ID de la producto
     */
    public function eliminar($id) {

        foreach ($this->myCart->get_content() as $items) {

            if ($items['id'] == $id) {
                $this->myCart->remove_producto($items['unique_id']);
            }
        }

        redirect('Cart', 'location', 301);
    }

    /**
     * Añade la producto al carrito 
     * @param Int $id ID de la producto
     */
    public function comprar($id) {
        
       $producto = $this->M_Cart->getDataProducto($id);
        print_r('Procuto de comprar'.$producto);
        $stock = $this->M_Cart->getStock($id); //Guardamos su stock
        
        $cantidad = 1;
        
        if ($this->myCart->articulos_total() > 0) {
            //Guarda la cantidad que tiene comprada de una producto
            foreach ($this->myCart->get_content() as $items) {
                if ($items['id'] == $id) {
                    $cantidad = $items['cantidad'];
                }
            }
        }

        if ($this->input->post('cantidadProd')) { //Si se ha introducido alguna cantidad en la vista de una producto
            $cantidadIntroducida = $this->input->post('cantidadProd');
        } else {
            $cantidadIntroducida = 1;
        }

        if ($stock >= ($cantidad + $cantidadIntroducida)) {//Si no supera el stock la cantidad elegida
           
            $articulo = array(
                "id" => $producto['idProducto'],
                "cantidad" => $cantidadIntroducida,
                "precio" => getPrecioFinal($producto['precio'], $producto['descuento']),
                "nombre" => $producto['descripcion'],
                "opciones" => array('imagen' => $producto['imagen'], 'error' => '')
            );
            $this->myCart->add($articulo);
            redirect('Cart', 'location', 301);
        } else if ($stock < ($cantidad + $cantidadIntroducida)) {//Si supera el stock, muestra error
            $articulo = array(
                "id" => $producto['idProducto'],
                "cantidad" => $cantidad,
                "precio" => getPrecioFinal($producto['precio'], $producto['descuento']),
                "nombre" => $producto['descripcion'],
                'opciones' => array('imagen' => $producto['imagen'],
                    'error' => '<div class="iconoerror"><span class="glyphicon glyphicon-warning-sign"></span></div>')
            );

            print_r('ARticulo'.$articulo);
            $this->myCart->actualizar($articulo);

            $msg_error = '<div class="alert msgerror"> <b> ¡Error! </b>Stock máximo superado</div>';
            $cuerpo = $this->load->view('V_Cart', Array('msg_error' => $msg_error), true);
            $this->load->view('V_Plantilla', Array('cuerpo' => $cuerpo, 'titulo' => 'Carrito', 'carritoactive' => 'active'));
       
        } else {
            redirect('Sessionnull', 'Location', 301);
        }
    }

    /**
     * Borra todo el carrito
     */
    public function eliminarcompra() {
        $this->myCart->destroy();

        redirect('', 'location', 301); //Vuelve a la página principal
    }

    /**
     * Elimina los mensajes de error que se han mostrado anteriormente
     */
    public function BorrarMensajesError() {
        if ($this->myCart->articulos_total() > 0) :
            foreach ($this->myCart->get_content() as $items) {
                $articulo = array(
                    "id" => $items['id'],
                    "cantidad" => $items['cantidad'],
                    "precio" => $items['precio'],
                    "nombre" => $items['nombre'],
                    'opciones' => array('imagen' => $items['opciones']['imagen'], 'error' => '')
                );
                $this->myCart->actualizar($articulo);
            }
        endif;
    }
    
}
