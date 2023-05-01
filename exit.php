<?php
    session_start();
    session_destroy();

    echo "<script>window.location='index_login.php';</script>";
?>