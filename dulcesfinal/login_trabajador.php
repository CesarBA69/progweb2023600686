<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if (empty($usuario) || empty($contrasena)) {
        echo "Por favor completa todos los campos.";
        exit;
    }

    $stmt = $conexion->prepare("SELECT contrasena FROM empleados WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($hash_guardado);
        $stmt->fetch();

        if ($contrasena === $hash_guardado) {
            header("Location: pagina_trabajador.html");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "Acceso inválido.";
}
?>
