<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Slumpade namn</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body> 
        <div>
        <form>
            <input type="text" name="antal">
            <input type="submit">            
        </form>
        <?php 
            $antal;
            if(isset($_GET["antal"])){
            foreach($_GET as $n){
                $antal=$n;                
                }
            if($antal>13){
                $antal=13;
            }
            else{}
            $namn = array("Alexander","Robin","Mattias","Carl","Albin","Viktor","Albert","Martin","Rebecka","Lovisa","Villburr","Truls","Dor");   
            #swag
            $var = 12;
            echo '<ol>';
            while($antal>0) {                                        
            $n = rand(0,$var);    
            echo '<li>';
            echo $namn[$n];
            echo '</li>';
            array_splice($namn,$n,1);
            $var--;
            $antal--;
            }
            echo '</ol>';
            }
        ?>
        </div>
    </body>
</html>
