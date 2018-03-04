<?php

namespace Hello\Classes;

class HelloWorld {

    public function __construct() {
        if (!file_exists(__DIR__ . '/../../../../configuracao.php')):
            file_put_contents(__DIR__ . '/../../../../configuracao.php', __DIR__ . '/../configuracao.php');
        endif;
    }

    public function say() {
        echo 'this is my first project using packages composer';
    }

}
