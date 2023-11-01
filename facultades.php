<?php
    include 'index.php';
    include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class=" container">
        <h1>FACULTADES</h1>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM facultad";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Codigo_Fac"]."</td>";
                        echo "<td>".$row["Nombre_Fac"]."</td>";
                        echo "<td>
                            <a href='editar.php?id=".$row["Codigo_Fac"]."' class='btn btn-success'>Editar</a>
                            <a href='eliminar_fac.php?id=".$row["Codigo_Fac"]."' class='btn btn-danger'>Eliminar</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 resultados";
                }
                $conn->close();
                ?>

            </tbody>
        </table>
        <div>
            <a href="form_registro_facultad.php"><button type="button" class="btn btn-primary">Registrar
                    Facultad</button></a>

        </div>
    </div>


</body>

</html>