<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF=8">
    <title>aula AEP1</title>
</head>

<body>
    <?php
    require_once 'chefe.php';
    require_once 'rei.php';
    require_once 'guerreiro.php';

    $teste = new chefe();
    $guerr = new guerreiro("Mestre de obra");
    $chefe = new rei;

    print_r($guerr);
    $teste->ComandarCidade();
    $teste->Diplomacia();
    $teste->guerrear();
    $guerr->guerrear();
    $chefe->guerrear();
    ?>
</body>

</html>