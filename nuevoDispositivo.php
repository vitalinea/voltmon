<?php
    $servidor="localhost";
    $basededatos="empresa";
    //crear una conexion a la bdd
    $conexion=mysqli_connect($servidor, "root","") or die ("No se establecio conexion");
    $db=mysqli_select_db($conexion,$basededatos) or die ("No pude abrir la base de datos");
    $consulta="SELECT*FROM empleado";
    $resultado=mysqli_query($conexion,$consulta) or die("La consulta no cuajo");  
    echo"<table border='2px black'>";
    echo"<tr>";
    echo"<td>Nombre</td>";
    echo"<td>Apellido</td>";
    echo"<td>Edad</td>";
    echo"<td>Domicilio</td>";
    echo"<td>Clave de Empleado</td>";
    echo"</tr>";        
while($columna = mysqli_fetch_array($resultado))
        {           
        echo"<tr>";
        echo"<td>".$columna['nombre']."</td><td>".$columna['apellidos']."</td><td>".$columna['edad']."</td><td>".$columna['domicilio']."</td><td>".$columna['clave_empleado']."</td>";
        }
    echo"</table>";
    // Mi modificacoin se vará en git
?>