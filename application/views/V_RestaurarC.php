<?php
/*
 * VISTA que pide el nombre de usuario para restablecer la contraseña en la aplicación a tráves del correo.
 */
?>
<!-- CUERPO-->
<!--<div style="padding-top: 150px;">-->

<div class="mm-product-area">
    <h4 style="text-align: center; color: #ff6666; ">Si has olvidado tu contraseña, ¡No te preocupes!<br> Introduce tu email y te enviaremos una nueva.</h4>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-4 col-md-offset-4">
                <div class="panel panel-default">


                    <h4>Restablecer Contraseña</h4>
                    
                    <form class="aa-login-form" action="<?= base_url() . 'index.php/Login' ?>" method="POST">
                        <label for="">Usuario<span>*</span></label>
                        <input type="text" placeholder="Usuario" name="username" type="text" autofocus>                        
                        <?php
                        if (isset($error))
                            echo $error;
                        ?>
                        <div class="form-group">
                            <button style="left: 50%; top: 50%; " class="aa-browse-btn " type="submit" value="entrar" name="entrar">Login</button>  
                        </div>
                        <label > </label>
                        <p class="aa-lost-password"><a href="<?=  base_url().'index.php/RestaurarClave'?>">¿Olvidaste tu contraseña?</a></p>
                        <div class="aa-register-now">
                            ¿No tienes una cuneta?<a href="account.html">Registrate ahora!</a>
                        </div>
                  
                    </form>
                </div>

            </div>
<!--        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Restablecer Contraseña</strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span> 
                                                <input class="input-text btn-block" placeholder="Nombre de usuario" name="username" type="text" autofocus>
                                            </div>                                            
                                        </div>
                                        <?= form_error('username'); ?>
                                        <div class="form-group">
                                            <button type="submit" name="enviar" class="add_to_cart_button btn-block"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Enviar mail</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<!--    </div>-->