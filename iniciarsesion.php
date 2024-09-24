<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title> R.E.S.E </title>
    <link rel="stylesheet" href="estilos2.css"/>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
            <img src="imagen-pequeña.jpg" alt="Descripción de la imagen" width="100" height="100" title="Título de la imagen" border="1">

<picture>
    <source srcset="imagen-grande.jpg" media="(min-width: 800px)">
    <source srcset="imagen-mediana.jpg" media="(min-width: 400px)">
</picture>
                <header> INICIAR SESION </header>
                </center>
            </div>
                <form class="formulario-registro">
                    <center>
                    <form method="post" class="signin-form" autocomplete="off" action="procesar.php">
                        <span class="field-validation-valid" data-valmsg-for="ValidacionMsg" data-valmsg-replace="true"></span>
                            <select class="form-select" id="selectDoc" data-val="true" data-val-required="The TipoId field is required." name="TipoId">
                                <option value="0" selected="selected"></option>
                    <option value="1">Docente</option> 
                    <option value="2">Estudiante</option>
                            </select>
                        </div>
            <center>
                
            <div class="input-field">
                <input type="text" class="input" placeholder="usuario" required>
                <i class="bx bx-user"></i>
            </div>

            <div class="input-field">
                <input type="password" class="input" placeholder="contraseña" required>
                <i class="bx bx-lock-alt"></i>
            </div>

            <div class="input-field">
                <input type="submit" class="submit" value="inicio">
            </div>

            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check"> Recordarme</label>
                </div>
                <div class="rigth">
                    <label><a href="#">¿olvidaste la contraseña?</a></label>
                </div>
            </center>
            </div>
        </div>
    </div>
</body>

