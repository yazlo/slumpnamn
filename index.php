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
            $antal = 0;
            $var=12;
            if (isset($_GET["antal"])) {
                foreach ($_GET as $n) {
                    $antal = $n;
                }                
                    
                $namn = array("Alexander", "Robin", "Mattias", "Carl", "Albin", "Viktor", "Albert", "Martin", "Rebecka", "Lovisa", "Villburr", "Truls", "Dor");
                #swag

                function slump($var) {
                    $n = rand(0, $var);
                    return $n;
                }

                function skriv($antal,$namn,$var) {
                    while ($antal > 0) {
                        echo '<li>';
                        $n = slump($var);
                        echo $namn[$n];
                        echo '</li>';
                        array_splice($namn, $n, 1);                                                
                    }
                }

                echo '<ol>';
                while ($antal > 0) {
                    skriv($antal,$namn,$var);
                    $antal--; 
                    $var--;
                }
                echo '</ol>';
            }
            ?>
        </div>
    </body>
</html>
