<?php
session_start();
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $contrasena = trim($_POST['contrasena'] ?? '');

    if (empty($usuario) || empty($contrasena)) {
        echo "Por favor ingresa usuario y contraseña.";
        exit;
    }

    //sirve para buscar al usuario y que valide si sis datos son correctos
    $stmt = $conexion->prepare("SELECT id_cliente, contrasena FROM clientes WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();

        
        if ($contrasena === $fila['contrasena']) {
            $_SESSION['id_cliente'] = $fila['id_cliente'];
            $_SESSION['usuario'] = $usuario;
            header("Location: pagina_cliente.html");
            exit;
        } else {
            echo "Contraseña incorrecta. <a href='login_cliente.html'>Intentar de nuevo</a>";
        }
    } else {
        echo "Usuario no encontrado. <a href='login_cliente.html'>Intentar de nuevo</a>";
    }

    $stmt->close();
} else {
    header("Location: login_cliente.html");
    exit;
}
?>
