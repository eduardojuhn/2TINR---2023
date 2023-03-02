<html>
    <form>
        <p> Tempo : <input name="t_tempo" type="text"> </p>
        <p> Velocidade : <input name="t_velocidade" type="text"></p>
            <input type = "submit" value="calcular" onclick = "calcular()">
             <a href="teste.php">
            <input type="button" value="limpar"></a>
    </form>
</html>
<?php
    function calcular(){
         if (isset($_GET["t_velocidade"]) || isset($_GET["t_tempo"])) {
            $velocidade = $_GET["t_velocidade"]; 
            $tempo = $_GET["t_tempo"];
            $distancia = 0;
            $distancia = $velocidade * $tempo;
            echo "A distância é " . $distancia . " km";
        }
    }
    calcular();
?>
  

  
