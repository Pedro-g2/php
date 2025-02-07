<?php
  session_start();
  
  if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] == "nao"){
    header("Location: index.php?err_session=yes");
  }
?>