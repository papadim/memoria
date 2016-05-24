<?php
    session_start();
    session_destroy();
    mysqli_close($dbCon);
    header('Location: index.php');
?>
