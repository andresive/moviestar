<?php 

    class Message {
        private $url;

        public function __construct($url) {
            $this->url = $url;
        }

        public function setMessage($msg, $type, $redirect = "index.php") {

            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;

            if($redirect != "back") { 
                // quando o redirect esta definido como back significa que vai redirecionar para a ultima pagina
                header("Location: $this->url" . $redirect);
            } else {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
                // http_refer é(retorna) a ultima url que o usuario entrou
            }
        }

        public function getMessage() {

        }

        public function clearMessage() {

        }
    
}