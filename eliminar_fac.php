<?php
include 'conexion.php';

// Obtén el ID desde la URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Ejecuta la consulta para eliminar el registro
if ($id) {
    $sql = "DELETE FROM facultad WHERE Codigo_Fac = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID no proporcionado.";
}

$conn->close();
?>