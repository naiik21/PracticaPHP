<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <?php
        $nom= 'Kurt';
        $cog= 'Cagle';
        $edat=40;
        $dataNeix = new DateTime();
        $dataNeix->setDate(1983, 05, 12);
        $telefon= array(65434566,933332211);
        $adreça= 'Carrer de turin, 15';
        $email= 'kurt.cagle@example.com';
        $treballa= true;
        $alçada= 1.67;
    ?>

    <h1><?php
        echo"Descrivint a $nom $cog";
    ?></h1>
    <h2><?php
        echo"Les dades de $nom son:";
    ?></h2>

    <ul>
        <li><?php
        echo"Es diu: $nom"
        ?></li>
        <li><?php
        echo"Te $edat anys"
        ?></li>
        <li><?php
        echo"Va neixer l'any:"?> <b><?php echo $dataNeix->format('Y-m-d'); ?></b>
        </li>
        </b>
        <li><?php
        echo"El seus telèfons són:".$telefon[0]." - ".$telefon[1];
        ?></li>
        <li><?php
        echo"Viu a: $adreça";
        ?></li>
        <li><?php
        echo"El seu email és: $email"
        ?></li>
        <li><?php
        if($treballa)
            echo"Treballa: Si";
        else
            echo"Treballa: No";
        ?></li>
        <li><?php
        echo"I medeix: $alçada"
        ?></li>
    </ul>




    <?php
        define("IVA", 1.21);  // Constante IVA
        // Definimos una array y dentro de esta tres mas con la info de cada curso
        $cursos=array(
            array(1, "PHP", "Introducció a PHP", 15.5),
            array(2, "Laravel", "Laravel per experts", 30),
            array(3, "Django", "Dominant Django", 10)
        );
        $img=array("PHP", "Laravel", "Django");// array con las imagenes
    ?>
    <h1><?php echo"Llista de cursos"?></h1>
    <h2><?php echo"Numero de cursos: ".count($cursos)?></h2>

    <?php
        // Recorremos la array cursos
        for($i=0; $i<count($cursos);$i++){   
            $n=01
    ?>
        <div style="border: 1px solid black;">
        <div><?php echo "<img src='$img[$i].png' width='100' height='100'> <br>"?></div>
        <h3><?php echo $cursos[$i][$n] ?></h3>
    <?php
            $n++;
    ?>
        <div><?php echo $cursos[$i][$n] ?></div>
    <?php
            $n++;
    ?>
        <div><?php echo "El preu del llibre amb IVA: ".$cursos[$i][$n]*IVA ?></div>
            
    <?php
        }
    ?>   
    </div>
</body>
</html>