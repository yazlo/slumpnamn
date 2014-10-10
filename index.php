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
            $var = 12;
            if (isset($_GET["antal"])) {                                        
                    #kollar om det finns nåt i querystringen
                    $antal = $_GET["antal"];
                    if ($antal > 13) {
                        $antal = 13;
                }
                #array med alla namnen
                $namn = array("Alexander", "Robin", "Mattias", "Carl", "Albin", "Viktor", "Albert", "Martin", "Rebecka", "Lovisa", "Villburr", "Truls", "Dor");                

                #funktion som slumpar
                function slump($var) {
                    $n = rand(0, $var);
                    return $n;
                }

                #funktion som skriver ut
                function skriv($antal, $namn, $var) {
                    while ($antal > 0) {
                        echo '<li>';
                        $n = slump($var);
                        echo $namn[$n];
                        echo '</li>';
                        array_splice($namn, $n, 1);
                        $antal--;
                        $var--;
                    }
                }
                
                #lista
                echo '<ol>';
                skriv($antal, $namn, $var);
                echo '</ol>';
            } else {
                #swag
            }
            ?>
        </div>
    </body>
</html>
