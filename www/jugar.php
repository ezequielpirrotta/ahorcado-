<?php 
    session_start();  
?>
<html>
    <head>
        <title>Ahorcado</title>
    </head>
    <?php include "header.html"; ?>
    <body style="background-image: url('./images/nyanCat.gif');background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;">

    <img src="./images/giphy.gif" alt="HTML5 Icon" width="128" height="128">
    <p style="color:white"> これは完全にランダムです</p>
    <p style="color:white">Translation: this is totally random :v</p>
    <audio controls>
        <source src="./media/The World Is A Stage Hazbin Hotel AMV.mp3" type="audio/mpeg">
    </audio>

    
    

    <form action="jugar.php" method="get">
        <p style="color:white">Letra: <input type="text" name="letra"></p>
        
    </form>
  
    <br>
    
    <?php 
        
        include_once("ahorcado.php");
        
        if(empty($_SESSION["letras"])){
            $_SESSION["letras"]=array();
        }
        if($_GET["letra"]!=null){
            $_SESSION["letras"][]=$_GET["letra"];
        }
        print_r($_SESSION["letras"]);
        $ahorcado=new ahorcado($_SESSION["palabra"],5);

        foreach($_SESSION["letras"] as $k=>$v){
            $ahorcado->jugar($_GET["letras"][$k]);
        }
        echo ($ahorcado->mostrar())."\n";
       
        if($ahorcado->won()){
            echo "Ganaste!!\n";
        }

        if($ahorcado->lost()){
            echo "Perdiste :(\n";
        }

    ?>
    </body>
    <?php include "footer.html";?>
</html>

