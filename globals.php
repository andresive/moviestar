<?php 

// a url base que vai retornar a pasta raiz do projeto aonde esta o index 

$BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"] . "?") . "/";