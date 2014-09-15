<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Slumpade namn</title>
    </head>
    <body>    
        <form>
            <input type="text" name="antal">
            <input type="submit">            
        </form>
        <?php    
        #slutet av denna lektion
            $antal=$_GET["antal"];
            $url="";
            $antal=substr($url, 27, 1);
            $namn = array("Alexander","Robin","Mattias","Carl","Albin","Viktor","Albert","Martin","Rebecka","Lovisa","Villburr","Truls","Dor");   #swag
            while (antal<0) {                            
            $var = 12;
            $n = rand(0,$var);
            echo $namn[$n];
            unset($namn[$n]);
            $var--;
            $antal--;
            }
            echo $url;
        ?>
    </body>
</html>
