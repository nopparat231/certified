<?php 

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_username'])){
    header("Location: ../index.php?login&error=Pless+login");
}

