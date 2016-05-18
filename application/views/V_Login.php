<?php /*
 * VISTA que pide usuario y contraseña para iniciar sesión en la aplicación con la opción de registrarse en la página o restablecer la contraseña.
 */
?>
<!-- CUERPO -->

<div class="mm-product-area">    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-4 col-md-offset-4">
                <div class="panel panel-default">


                    <h4>Login o Registrarse</h4>
                    <form class="aa-login-form" action="<?= base_url() . 'index.php/Login' ?>" method="POST">
                        <label for="">Usuario<span>*</span></label>
                        <input type="text" placeholder="Usuario" name="username" type="text" autofocus>
                        <label for="">Password<span>*</span></label>
                        <input type="password" placeholder="Password" name="clave" value="">
                        <?php
                        if (isset($error))
                            echo $error;
                        ?>
                        <div class="form-group">
                            <button class="aa-browse-btn " type="submit" value="entrar" name="entrar">Login</button>  
                        </div>
                        <label > </label>
                        <p class="aa-lost-password"><a href="<?=  base_url().'index.php/RestaurarClave'?>">¿Olvidaste tu contraseña?</a></p>
                        <div class="aa-register-now">
                            ¿No tienes una cuneta?<a href="account.html">Registrate ahora!</a>
                        </div>
                        <!--            <label > </label>
                                    <p class="aa-lost-password"></p>
                                    <div class="aa-register-now">
                                      Don't have an account?<a href="<?= base_url() . 'index.php/User_insert' ?>" data-toggle="modal" data-target="">Register now!</a>
                                      
                                    </div>-->
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!--   Login Modal   
  <div class="modal fade" id="formulario_ajax" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login o Registrarse</h4>
          <form class="aa-login-form" action="<?= base_url() . 'index.php/Login' ?>" method="POST">
            <label for="">Usuario<span>*</span></label>
            <input type="text" placeholder="Usuario" name="username" type="text" autofocus>
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="clave" value="">
            <?php
                if (isset($error))
                    echo $error;
            ?>
            <div class="form-group">
            <button class="aa-browse-btn" type="submit" value="entrar" name="entrar">Login</button>  
            </div>
            <label > </label>
            <p class="aa-lost-password"></p>
            <div class="aa-register-now">
              Don't have an account?<a href="<?= base_url() . 'index.php/User_insert' ?>" data-toggle="modal" data-target="">Register now!</a>
              
            </div>
          </form>
        </div>                        
      </div> /.modal-content 
    </div> /.modal-dialog 
  </div>-->