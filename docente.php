<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>R.E.S.E</title>
   <link rel="stylesheet" href="estilos4.css"/>
</head>

<body> 
    <div id="container"></div>
    <center>
    <br><br><br><br><br><br><br><br><br>
    <header>
        <h1>DOCENTES</h1>
    </header>
    </center>
</body>

<body>
    <center>
    <form>
        <ol type="1">
            <form method="post" class="signin-form" autocomplete="off" action="procesar.php">
                <span class="field-validation-valid" data-valmsg-for="ValidacionMsg" data-valmsg-replace="true"></span>
                    <select class="form-select" id="selectDoc" data-val="true" data-val-required="The TipoId field is required." name="TipoId">
                        <option value="0" selected="selected"></option>
            <option value="1">William David Alvarez</option> 
            <option value="2">Luis Fernando Quiroz</option>
            <option value="3">Mauricio Uribe</option>
            <option value="4">Cristina Monsalve</option>
                    </select>
          </ol>
          <input type="submit" value="enviar">
    </form>
    </center>
</body>