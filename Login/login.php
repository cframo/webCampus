<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: hiramjgonzalez98@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<?php
    require_once '../Config/check.php';
?>




<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Iniciar Sesión - WebCampus UNIMAR</title>
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="login-style.css"/>
        <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>

    </head>

    <body>
        <?php
            if(isset($_SESSION["error"])){
            echo "<script language='javascript'>alert('Cédula o Contraseña "
                . "incorrectas. Intente de nuevo.')</script>";
            
            }
        
        ?>

        <figure id="Encabezado">
            <img src="../Imagenes/Encabezado WC.png"/>
        </figure>
        
        <section>
            <div id="envoltura">      
                    <div id="cuerpo">
                        <form id="form-login" action="redireccion.php" method="POST" autocomplete="off">

                            <p><label >Cédula de Identidad</label></p>
                            <input class="User" type="text" id="usuario" name="usuario" placeholder="Introduzca su cédula" autofocus="" required=""></p>
                            <p><label>Contraseña</label></p>
                            <input class="Pass" type="password" id="contrasenia" name="pass" placeholder="Introduzca su contraseña" required=""></p>
                            <p id="Rec"><small><em><u>
                                <a href="olvido.php"> ¿Olvidó contraseña?</a>
                            </u></em></small></p>
                            <label id="Check"><input type="checkbox" name="remember" id="Remember" value="first_checkbox"><p>Recordarme</p></label>
                            <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                        </form>
                    </div>
            </div>
        </section>

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

    </body>

</html>