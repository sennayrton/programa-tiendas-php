<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding:15px;">

    <h1>Programa para tiendas</h1>
    <hr>
    <a href="#web"><input type="button" value="Añadir cliente"></a>
    <hr>

    
    <?php


        $mysqli = new mysqli("", "", "", "");
        $mysqli->set_charset("utf8");

        if(empty($_POST['where']) == false){
            $res = $mysqli->query("SELECT id_clientes, nombre, apellidos, provincia, edad, telefono, email FROM clientes WHERE{$_POST['where']}") or die(mysqli_error($mysqli));
        }else{
            $res = $mysqli->query("SELECT id_clientes, nombre, apellidos, provincia, edad, telefono, email FROM clientes") or die(mysqli_error($mysqli));

        }

        echo "<table style='width=100%;'>";
        while($tmp = $res->fetch_array()){
            
            echo "<tr> 
            <td>{$tmp['id_clientes']}</td> <td>{$tmp['nombre']}</td> <td>{$tmp['apellidos']}</td> <td>{$tmp['provincia']}</td> <td>{$tmp['edad']}</td> <td>{$tmp['telefono']}</td> <td>{$tmp['email']}</td> 
            </tr>";
        }
        echo '</table>';
    ?>

    <hr>
    <div style="text-align: right;">
        <form action="" method="POST">
            WHERE: <input type="text" name="where"> <input type="submit" value="Consultar">
        </form>
    </div>


</body>
</html>