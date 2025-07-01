<?php 

    require_once "models/Message.php"; // message system
    require_once "models/User.php"; // User object
    require_once "dao/UserDAO.php"; // UserDAO object
    require_once "globals.php"; // global variables
    require_once "db.php"; // bada bank conection

    // instance of message object 
    $message = new Message($BASE_URL);

    // get the  type of form 

    $type = filter_input(INPUT_POST, "type");

    // verify a type of form 

    if($type == "register") { // register camp

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmPassword = filter_input(INPUT_POST, "confirmPassword");

        // verify of minimun data
        if($name && $lastname && $email && $password) {


        } else{

            // set a message error of data minimun required
            $message->setMessage("Preencha todos os campos, por favor", "error", "back");
            // o back nesse caso retorna para o auth
            
        }

    } else if($type == "login") {

    }


