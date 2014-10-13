<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
       
        
        $namnlista = array("Beckis","Legolas","Lisia","Balbin","Bombo", "Dor", "Truls", "Albin", "Carl", "Alexander");
     
        if(!isset($_GET["antal"])){           
            echo "Välkommen, välj ett antal från 1-10";
        }
        
        else{
            if($_GET["antal"]>10){
                echo 'Skriv ett tal från 1-10';
            }
            else{
                 $antal = $_GET["antal"];
            $skrivArray = slumpa($antal, $namnlista);
            skrivut($skrivArray);
            }
           
        
        }
        
        function slumpa($antal1, $array){
//            $temp_namnlista = array($array);
            
            shuffle($array);
            
            $antal1 = sizeof($array) - $antal1;
            $antal1 -=1;
            for($i=$antal1; $i>=0; $i--){
                
                array_splice($array, $i, 1);      
            }
            
            return $array;
        }
        
        function skrivut($array){
            echo "<ol>";
            
            foreach ($array as $namn) {
                echo "<li>{$namn}</li>";
                
            }
            
            echo"</ol>";
        }
        
        
       
//        
//        foreach($skrivArray as $namn){
//            echo "{$namn} <br>";
//        }
     
        
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="number" value="1" name="antal">
            <input type="submit">
            
        </form>
        
     
        
    </body>
</html>