<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Array</title>
</head>
<body>
    <?php
        $compromisso = array('Segunda' => "Aula no Senac", 'Terça'=>"Aula de Python",'Quarta'=>"Aula de PHP");

        foreach($compromisso as $dia => $evento){
            echo("Dia: ".$dia." ");
            echo("Evento: ".$evento."</br>");
        }
    ?>
</body>
</html>