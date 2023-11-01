<?php
    include 'index.php';
    include 'conexion.php';

    $xCodigoFac = $_POST['codigoFac'];
    $xNombreFac = $_POST['nombreFac'];
    

   
    if (isset($_POST['codigoFac']) && isset($_POST['nombreFac'])) {
        $xCodigoFac = $_POST['codigoFac'];
        $xNombreFac = $_POST['nombreFac'];
    
        $stmt = $conn->prepare("INSERT INTO facultad (Codigo_Fac, Nombre_Fac) VALUES (?, ?)");
        $stmt->bind_param("ss", $xCodigoFac, $xNombreFac);
    
        if ($stmt->execute()) {
            echo "Nuevo registro creado correctamente";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    } else {
        echo "No se recibieron los datos del formulario.";
    }

    $conn->close();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de facultad</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container pc">
        <form class="text-center border border-light p-5" action="form_registro_facultad.php" method="post">


            <p class="h4 mb-4">Registrar Nueva Facultad</p>

            <!-- Name -->
            <input type="number" name="codigoFac" id="defaultContactFormName" class="form-control mb-4" placeholder="Codigo de la facultad" required>

            <!-- Email -->
            <input type="text" name="nombreFac" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Nombre de la facultad" required>

            
            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Send</button>

        </form>
    </div>

</body>

</html>