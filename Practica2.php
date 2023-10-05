<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        $taules= array(); // Array buida, on es posaran el numero de comensals
        // Afegim a taules un numero random del 0 al 5 (el numero de comensals)
        for($i=0; $i<=9; $i++){
            array_push($taules, rand(0, 5));
        }

        // Iterem per imprimer la taula amb el nº de comensals
        for($i=0; $i<count($taules); $i++){
            // Si té 0 comensals
            if($taules[$i]==0){
    ?>
                <li>
                    <?php echo"La taula ".$i." esta buida"?>
                </li>
    <?php
            // Si té 5 comensals
            }else if($taules[$i]==5){
    ?>
                <li>
                    <?php echo"La taula ".$i." esta plena"?>
                </li>
    <?php    
            // Si té de 1-4 comensals
            }else{
    ?>
                <li>
                    <?php echo"La taula ".$i." té ".$taules[$i]." comensals"?>
                </li>
    <?php            
                }            
            }
    ?>      
    </ul>
    <br>
    <br>
    <br>

    <ul>
    <?php
        $hotel= array(); // Array buida, on es posaran el numero de plantes, habitacions i persones
        // Afegim a hotel una serie d'arrays que representen les plantes
        for($i=0; $i<5; $i++){
            array_push($hotel, array());
            // I dintre de les plantes afegirem noves arrays que seran les habitacion i es generara un numero random de persones
            for($a=0; $a<10; $a++){
                array_push($hotel[$i], rand(0, 4));
            }
        }

        // Iterem per imprimer la planta amb el nº de habitacio
        for($i=0; $i<count($hotel); $i++){ 
            // I en l'habitació quantes persones
            for($a=0; $a<count($hotel[$i]); $a++){
                // Si té 0 persones
                if($hotel[$i][$a]==0){
    ?>
                    <li>
                        <?php echo"A l'habitació ".$a." de la planta " .$i. " esta buida"?>
                    </li>
    <?php
                // Si té 4 persones
                }else if($hotel[$i][$a]==4){
    ?>
                    <li>
                        <?php echo"A l'habitació ".$a." de la planta " .$i. " esta plena"?>
                    </li>
    <?php    
                // Si té de 1-3 persones
                }else{
    ?>
                    <li>
                        <?php echo"A l'habitació ".$a." de la planta " .$i." té ".$hotel[$i][$a]." persones"?>
                    </li>     
    <?php            
                }            
            }
    ?>
        <br>
    <?php
        }
    ?>  
    </ul>
</body>
</html>