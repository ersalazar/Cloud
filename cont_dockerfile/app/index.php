<html>
    <body>
        
    <?php

    $connection = mysqli_connect("host.docker.internal", "root", "dnJNflkvc23?sdf!N", "ejemplo", "3030");
    if (!$connection) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $sqlquery = "SELECT * FROM alumnos ORDER BY id";
    $ob = mysqli_query($connection,$sqlquery);

    echo "Lista de todos los alumnos y sus animales mascota <br><br>" ;

    echo "Total de alumnos: ".mysqli_num_rows($ob)."<br><br>";

    for($i=0;$i<mysqli_num_rows($ob);$i++){
        $data = mysqli_fetch_array($ob);
        echo "nombre: ".$data["nombre"]." apellido: ".$data["apellido"]." mascota: ".$data["mascota"]. "<br>";

    }
        

    ?>
</body>
</html>