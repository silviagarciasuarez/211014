<!DOCTYPE html>
<html >
    <head>
        <title>
            ARRAYS
        </title>
    </head>
    <body>


        <!-- código PHP-->
     
        <?php
       
        
    for ($i=1; $i < 3; $i++) { 

        for ($j=1; $j < 4; $j++) { 

        $num= rand(1,100);
        $columna[$j] = $num;  
      
     }
    
     $fila["VUELTA".$i]=$columna ;
   
     echo "<br>";

    }
   
    
    foreach($fila as $clave=>$valor){
        echo  $clave;
        echo "<br>";

        foreach($valor as $valor2){

        echo "Columna ". $valor2;
        echo "<br>";

  }   echo "<br>";
 }

  
  ?>


    </body>
    </html>
