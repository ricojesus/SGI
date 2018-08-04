<?php
//(session_status() == PHP_SESSION_NONE)?session_start():null;
  
//Usaremos esse programa, para criar sessao, variaveis globais, etc.

//define("PATH", "/sgi/");

include_once ("classes/dal/Sql.php");

//if (!isset($_SESSION["gvauser_id"])) {
//    echo '<meta http-equiv=REFRESH CONTENT=0;url=classes/controllers/login_controller.php>';
//    exit;
//}

include_once ("classes/views/header.php");

include_once ("classes/views/dashboard.php");

include_once ("classes/views/footer.php");

?>