<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Usando</title>
</head>
<body>
    <?php
    $nome1 = 'Guilherme Soares';
    $nome2 = 'Caio Elias';
    $nome3 = 'Washington';

     $nome = array('Guilherme Soares','Caio Elias', 'Washington');

     $nome[3] = "Gustavo";

     $nome= array('Bruno','Daniel Santos','Diego');

     echo(count($nome));

     echo($nome1);

     echo($nome[3]); 
     $notas = array('Guilherme Soares'=>'6','Caio Elias' => '7','Washington'=>'8');

     $media = ($notas['Guilherme Soares'] + $notas['Caio Elias'] + $notas['Washington'])/7;
    echo("A média de  nota da sala é: $media")
    ?>
<hr>
<?php
    $pessoa= array(
        'Nome'=>'Guilherme Soares',
        'Nota'=>9.75,
        'Aluno'=>false);
        echo("Nome: "  .$pessoa['Nome'].  "</br>");
        echo("Nota: ".$pessoa['Nota']."</br>");
        echo("Aluno: ".$pessoa['Aluno']."</br>");
?>
<h1> Usando o Forech </h1>

<?php
    $produtos = array('Hd' => 234.09, 'Placa mãe'=>2345.95,'Processador'=>262.98);

    foreach($produtos as $prod => $preco){
        echo("Produto: ".$prod." ");
        echo("R$ ".$preco."</br>");
    }
?>

</body>
</html>