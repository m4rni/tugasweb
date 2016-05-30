<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   
    <body>
        <?php
        $x = 10;
        $y = 6;
        echo $x + $y,"<br>";
        echo $x - $y,"<br>";
          echo $x * $y,"<br>";
           echo $x / $y,"<br>";
           echo $x % $y,"<br>";
            echo "------------------------","<br>";
            
           
           echo $x != $y,"<br>";
           echo $x <> $y,"<br>";
           echo $x !== $y,"<br>";
           echo $x and $y,"<br>";
           echo $x or $y,"<br>";
           echo $x xor $y,"<br>";
           echo $x && $y,"<br>";
           echo $x || $y,"<br>";
           echo $x | $y,"<br>";
           
           echo "------------------------","<br>"; 
           
           echo var_dump ($x == $y),"<br>";
           echo var_dump ($x === $y),"<br>";
           echo var_dump ($x != $y),"<br>";
           echo var_dump ($x <> $y),"<br>";
            echo var_dump ($x !== $y),"<br>";
           echo var_dump ($x and $y),"<br>";
            echo var_dump ($x or $y),"<br>";
             echo var_dump ($x xor $y),"<br>";
            echo var_dump ($x && $y),"<br>";
             echo var_dump ($x || $y),"<br>";
              echo var_dump ($x | $y),"<br>";
              
              echo "------------------------","<br>";
              $favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "your favorite color is red!";
        break;
    case "blue":
    echo "your favorite color is blue!";
        break;
     case "green":
        echo "your favorite color is green!";
        break;
    default:
         echo "your favorite color is neither red, blue, and green!";
        
}

?>
      
     echo "------------------------","<br>";
     <?php
     for ($x = 0; $x <= 10; $x++){
         echo "the number is: $x <br>";
     }
     ?>      
        echo "------------------------","<br>";
     
          <?php
     $x = 1;
     while($x <=5){
         echo "The number is: $x <br>";
         $x++;
     }
 ?>    
        
    </body>
</html>
