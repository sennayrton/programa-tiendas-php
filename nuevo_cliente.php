<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding:15px;">

    <h1><a href="/">Programa para tiendas</a> > Nuevo cliente</h1><hr>


    <form action="" method="POST">
    
        <table>
            <tr> <td>Nombre:</td>       <td> <input type="text" name="nombre"> </td> </tr>
            <tr> <td>Apellidos:</td>    <td> <input type="text" name="apellidos"> </td> </tr>
            <tr> <td>Provincia:</td>    <td> <input type="text" name="provincia"> </td> </tr>
            <tr> <td>Edad:</td>         <td> <input type="text" name="edad"> </td> </tr>
            <tr> <td>Teléfono:</td>     <td> <input type="text" name="telefono"> </td> </tr>
            <tr> <td>Email:</td>        <td> <input type="text" name="email"> </td> </tr>
            <tr> <td>Contraseña:</td>   <td> <input type="text" name="password"> </td> </tr>
            <tr> <td></td>              <td> <input type="submit" value="Enviar formulario"></td></tr>
        </table>

    </form>            

    <?php

    if (empty($_POST['nombre']) == false)  {

        $mysqli = new mysqli("", "", "","");
        $mysqli->set_charset("utf8");

        $mysqli->query("INSERT INTO clientes (nombre, apellidos, provincia, edad, telefono, email, password) VALUES ('{$_POST['nombre']}', '{$_POST['apellidos']}', '{$_POST['provincia']}', {$_POST['edad']}, {$_POST['telefono']}, '{$_POST['email']}', '{$_POST['password']}')");

        echo 'Se ha guardado el nuevo cliente';
    }

    ?>


</body>
</html>