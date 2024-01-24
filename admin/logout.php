<?php
    session_start();
    session_destroy();//fermeture session
    header("Location: ../index.php");//redirectio
?>