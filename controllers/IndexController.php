<?php

class IndexController {
    public function index() {
        $view = new View();
        $view->show('home.php', ['mensaje' => '¡Bienvenido al sistema MVC en PHP!']);
    }
}

