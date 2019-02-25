<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista 2-Vetores</title>
</head>
<body>
    
<?php
echo "Exercício 1<br>" ;

$vetor1 = array();

for ($i=0; $i < 50; $i++){
    $vetor1 [$i]=42;
    //echo "Índices: ". $i . " Valor: " .$vetor_1[$i] ." <br>";
}
echo"<pre>";
print_r($vetor1);
echo"</pre>";

echo "<br>Exercício 2<br>" ;

    $vetor2 = array();
    
        for ($i=0; $i < 50; $i++){
         $vetor2 [$i]= $i+1;
      }
echo"<pre>";
print_r($vetor2);
echo"</pre>";


echo "<br>Exercício 3<br>" ;
$vetor3 = array();
 $maior = 0;
 $menor = 0;
 $soma=0;
 $media=0;
 
     for ($i=0; $i < 30; $i++){
         $vetor3 [$i]= $i;
         
         if($vetor3[$i] > $maior){
            $maior = $vetor3 [$i];
            $posicao =$i;
         }
         $soma= $vetor3 [$i]+ $soma;
         $media=$soma/count ($vetor3);
      }
      
echo "Maior: ".$maior ."<br>";
echo "Posição: " .$posicao ."<br>";
echo "Soma: " . $soma ."<br>";
echo "Média: " . $media ."<br>";

echo "<br>Exercício 4<br>" ;
$vetor4 = array();

    for ($i=0; $i < 50; $i++){
    $vetor4 [$i]= ($i+1)*2;
    }
    
echo"<pre>";
print_r($vetor4);
echo"</pre>";  

echo "<br>Exercício 5<br>" ;
?>
    <select>
    <?php 
    $vetor_5 = array(
        
        0=>"Nomes",
        1=>"Ana laura",
        2=>"Camilly",
        3=>"Yasmin",
        4=>"Thalia",
        5=>"Maria Paula",
        6=>"Leticia",
        7=>"Thaigo",
        8=>"Samuel",
        9=>"Thais",
        
    );
        for($i=0;$i<10;$i++){
     ?>  
        <option>
    <?php
        echo $vetor_5[$i];
    ?>
        </option>
        <?php
        }
        ?>
    </select>





    </body>
</html>

