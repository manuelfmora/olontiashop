 <!-- Start slider -->

  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <?php foreach ($banner as $key => $producto) : ?>
           
            

            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url() . 'assets/img/imgAPP/' . $producto['imagen']?>" alt="">                
              </div>
              <div class="seq-title">
               <span data-seq>últimas</span>                
                <h2 data-seq>Novedades</h2>                
                <p data-seq></p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRA AHORA</a>
              </div>
            </li>
            
            <?php endforeach; ?>  
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
 
  <!-- / slider --> 
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Alternativa</a></li>
                    <li><a href="#men" data-toggle="tab">Pop</a></li>
                    <li><a href="#women" data-toggle="tab">Hip Hop</a></li>
                    <li><a href="#sports" data-toggle="tab">Rock</a></li>
                    <li><a href="#electronics" data-toggle="tab">Electronica</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
   <!--PRODUCTO-->     <?php foreach ($seleccionados as $key => $producto) : ?>              
          <!--Comprobamos que las imagenes pertenecen a la carpeta BANNER -->
  
            
                          
<!--PRODUC NO BANNERS--> <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="<?= base_url() . 'assets/img/imgAPP/' . $producto['imagen'] ?>"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Añadir al carro</a>
                              <figcaption>
                                  <h6 class="aa-product-title"><a href="#"><?php echo $producto['nombre_pro'];?></a></h6>
                              <span class="aa-product-price"> <?php MostrarDescuento($producto['precio'], $producto['descuento']) ?></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                       
     <!---->                <a href="<?= base_url().'index.php/VerCd/ver/'.$producto['idProducto']?>" data-toggle2="tooltip" data-placement="top" title="Vista Rapida" data-toggle="modal" ><span class="fa fa-search"></span></a>   
                             <a data-toggle="modal" href="<?= base_url().'index.php'?>" class="btn btn-primary btn-large">Abrir ventana modal</a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        
   <!--/PRODUCTO-->     <?php endforeach; ?>  
                       <!-- start single product item -->

                      </ul>
<!--                 <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>-->
                    </div>
                    <!-- / men product category -->
          
                           
                  </div>
          

              </div>
           
            </div>
          
          </div>
                                       <!-- PAGINACIÓN -->
                
       
           
            
        
        </div>
        
      </div>
               
    </div>
             
  </section>
  <!-- / Products section -->
   
       <div class="product-pagination text-center">
                    <nav>                              
                        <!-- PAGINATION CODEIGNITER -->
                        <?= $this->pagination->create_links(); ?>

                    </nav>                        
           </div>





  
  

