<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ubicacion = $_POST['ubicacion'];
    $cedula = $_POST['cedula'];
    $cantidad_botellones = $_POST['cantidad_botellones'];
    $litros_totales = $_POST['litros_totales'];

    // Realiza la conexión a la base de datos (debes proporcionar tus propios datos de conexión).
    $db = new mysqli('localhost', 'edwgon92_bdd_edward', '#Ewar.2391.', 'edwgon92_bdd_edward');

    if ($db->connect_error) {
        die("Error de conexión: " . $db->connect_error);
    }

    // Insertar los datos del nuevo cliente en la base de datos
    $query = "INSERT INTO botellonx_clientes (Nombre, Apellido, Cedula, Ubicacion) VALUES ('$nombre', '$apellido', '$cedula', '$ubicacion')";
    if ($db->query($query) === TRUE) {
        date_default_timezone_set('America/Caracas');
        $fecha_hora = date('d-m-Y h:i a');
        
        $query = "INSERT INTO botellonx_botellones ( Cantidad, Total_Lts, Fecha_Hora, Cedula) 
                  VALUES ($cantidad_botellones, $litros_totales, '$fecha_hora','$cedula')";

        if ($db->query($query) === TRUE) {
            echo "Compra y Cliente registrado exitosamente.";
        } else {
            echo "Error al registrar la compra: " . $db->error;
        }
        echo "Cliente registrado exitosamente.";
    } else {
        echo "Error al registrar el cliente: " . $db->error;
    }

    $db->close();
}
?>
