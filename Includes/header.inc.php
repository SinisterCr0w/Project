<?php 
    session_start();
    include dirname(__DIR__,1)."/Includes/autoloader.inc.php";
    include dirname(__DIR__,0)."/modal/modalTemplate.php";

    $urlRequest = $_SERVER['REQUEST_URI'];
    $url = strpos($urlRequest,"index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>
    <body>
        <div class="nav-container">
            <div class="nav-logo">
                <img class="logo"src="../Images/SMPLogo2.png">
            </div>
            <ul class="nav-selection-list">
                <?php if(!$url){ ?>
                    <li><a href="index.php"><i class="fa-solid fa-house fa-2x"></i></a></li>
                <?php } ?>    
                <li><a href="aboutUs.php"><i class="fa-solid fa-address-card fa-2x"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-warehouse fa-2x"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-toolbox fa-2x"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-right-from-bracket fa-2x nav-logout"></i></a></li>
            </ul>
            <div class="nav-login">
                <ul class="nav-signin">
                    <li><a href="#"><i class="fa-solid fa-user-plus fa-2x signin"></i></a>
                    <li><a href="#"><i class="fa-solid fa-user fa-2x login"></i></a>
                </ul>
            </div>
        </div>  
    </body>
</html>