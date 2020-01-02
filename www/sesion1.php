<?php 
    session_start();  
?>
<html>
    <head>
        <title>Ahorcado</title>
    </head>
    <body>
    <?php include "header.html"; ?>
    <form action="sesion1.php" method="get">
        <p>Palabra: <input type="text" name="palabra"></p>
    </form>
    <?php $_SESSION['palabra']=$_GET["palabra"]; 
        if($_SESSION['palabra']!==null){
            
        }
    ?>

    <?php include "footer.html";?>
</html>