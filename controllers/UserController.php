<?php
require_once 'models/User.php';

class UserController {
    public function index() {
        $vista = new View();
        $vista->show("register.php");
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $deporte = $_POST['deporte'];

            $user = new User();
            $ok = $user->save($nombre, $email, $password, $deporte);

            if ($ok) {
                echo "Usuario registrado correctamente.";
            } else {
                echo "Error al registrar usuario.";
            }
        } else {
            $vista = new View();
            $vista->show("register.php");
        }
    }
}
