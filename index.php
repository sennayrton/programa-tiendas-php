<h1>Programa para tiendas</h1>
<hr>

<?php
                           #server     #user    #password    #bbdd
    $mysqli = new mysqli("          ", "    ", "         ", "      ");
    $mysqli->set_charset("utf8");

    #consulta1 ¡PRIMERO INSERT!
    $mysqli->query('INSERT INTO clientes(nombre,apellidos) VALUES ("Luis","Peris")');
    $email_actual = "luis@peris.com";
    $telefono = "";
    $mysqli->query("UPDATE clientes SET email='{$email_nuevo}' WHERE email='{$email_actual}'");
    #consulta2 ¡DESPUES SELECT!

    #BORRAR DATOS
    if($_GET['cat']=="borrar"){
        echo "<h2>Borrado el ID: {$_GET['id']}...</h2>";

        $mysqli->query("DELETE FROM clientes WHERE id_clientes={$_GET['id']}");
    }

    $res = $mysqli->query("SELECT id_clientes, nombre, apellidos, provincia,  email FROM clientes") or die(mysqli_error($mysqli));
    
    echo "<table style='width=100%;'>";
    while($tmp = $res->fetch_array()){
        echo "<tr> <td>{$tmp['id_clientes']}</td> <td>{$tmp['nombre']}</td> <td>{$tmp['apellidos']}</td> <td>{$tmp['provincia']}</td>  <td>{$tmp['email']}</td> <td><a href='?cat=borrar&id={$tmp['id_clientes']}'>borrar</a></td> </tr>";

        #echo $f['nombre'].' '.$f['apellidos'].' ('.$f['provincia'].") - ".$f['edad'].'<br/>';
    }
    echo '</table>';
?>    
