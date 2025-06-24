<?php 
    require_once "globals.php";
    require_once "db.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="<?= $BASE_URL ?>img/moviestar.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS link file -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
<!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.css" integrity="sha512-Dg29JTs/r029HFd/aOkPcgmeELzRHukL99WqC7FPC+oyF4DClbMLlQANt5tXI1sgjpBGbcQIRqR4YNjI2LbNeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- bootstrap js link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/js/bootstrap.js" integrity="sha512-4rgYnurxnFSdCDrgqqH1h/sOb4/tUd1MXYeCeu5PcYa+svtguh06/TGpvGwvJB6a3SNp2cDaN2f8F5yZ1o/vPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Moviestar</title>
</head>
<body>
<header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">

        <a href="<?=$BASE_URL?>" class="navbar-brand">
            <img id="logo" src="<?=$BASE_URL?>img/logo.svg" alt="moviestar">
            <span id="moviestar-title">Moviestar</span>
        </a>
        <!-- haburger button for mobile users -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">

            <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="search">
            <button class="btn my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>                
            </button>

        </form>
        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav">
                <li class="nav-iten">
                    <a href="<?= $BASE_URL ?>auth.php" class="nav-link"> Entrar / Cadastrar </a>
                </li>
            </ul>

        </div>
    </nav>
</header>
