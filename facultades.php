<?php
    include 'index.php';
    include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>FACULTADES</h1>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Num.</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $sql = "SELECT * FROM facultades";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["codigo_fac"]."</td>";
                echo "<td>".$row["nombre_fac"]."</td>";
                echo "<td>
                    <a class='btn btn-success'>Editar</a>
                    <a class='btn btn-danger'>Eliminar</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "0 resultados";
        }
        $conn->close();
    ?>
            <tr>
                <th scope="row">1</th>
                <td>12345</td>
                <td>Carlos Andres</td>
                <td>
                    <a class="btn btn-outline-success btn-rounded"  data-mdb-ripple-color="dark">editar</a>
                    <button type="button" class="btn btn-outline-danger btn-rounded"
                        data-mdb-ripple-color="dark">Danger</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>54321</td>
                <td>Carolina Lopez</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>54321</td>
                <td>Carolina Lopez</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

</body>

</html>