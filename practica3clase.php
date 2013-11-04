<html><head><title>Tabla de cien - n&uacute;meros de 1 to 100 en forma de tabla</title>
<head></head>
 <link rel="stylesheet" href="colores.css">
 <?php
 
  
  $texto = 0;
  ?>                                                   
 </head>                                                                 
 <body>  
 <p align="center"><font color="black" face="Default" size="5"><b>Tabla de n&uacute;meros de 1 a 100</b></font><br> 
 <br>   
 
<table border="1">
 <?php

 $clase='';
 for($num=0;$num<10;$num++){
  echo "<tr>";
 
  for($col=0;$col<10;$col++){
 
   if($num%2==0){
    $clase='class="par"';
    }else{
$clase='class="impar"';
   }
  echo "<td ".$clase.">".$texto."</td>";
  $texto++;
  }
   echo "</tr>";
  }
 ?>
 
 </table>
 </body>                                                                 
 </html>