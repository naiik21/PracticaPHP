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


</body>
</html>