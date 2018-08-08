<?php

include_once ("../views/header.php");
include_once ("../dal/Sql.php");


if (isset($_GET["action"])){
    if ($_GET["action"] == "novo"){
        include_once ("../views/membro_edit.php");
    } else {
        include_once ("../views/membro_list.php");
    }
} else {
    include_once ("../views/membro_list.php");
}

include_once ("../views/footer.php");


?>