<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinando array</title>
</head>
<body>
    <h1>Array</h1>
    <?php 
    //  $familia = [
    //  "Marcos" ,
    //  "Adilson",
    //  "Elaine",
    //  "Cesar",
    //  "Kleito,",
    // "Edilson",
    //  "Monica",
    //  "Antonio",
    //  "Felipe",
    //  "Layson",
    //  "Edmundo",
    //  "Victor",
    //  "Hector"
    // ];
    // echo "Minha irmã" .$familia[2] ."<br>";
    // echo "Meu irmão" .$familia[0] ."<br>";
    // echo "Meu filho" .$familia[12];

    //for ($i=0; $i < ; $i++) { 
    
    //}
//    echo "O tamanho do meu array é " .count($familia);
    
  ########################## EXERCICIOS A SOMA DOS ELEMENTOS DE UM ARRAY######################################################  
    
//     $numero = [1,2,3,4,5,6,7,8,9,10,11,12,13];
//     $soma = 0;
    
//   foreach ($numero as $numero){
//     $soma+=$numero;
//   }
//     echo "A soma dos elementos é: " .$soma  ."\n";
    

################################################################################
    // $notas = [7.5,8.0,6.3,9.2,5.4]; //numeros com pontos são chamados de float ou ponto flutuante
    // $somanotas = 0;

    // foreach ($notas as $notas){
    //     $somanotas+=$notas;
    // }
    // echo "A nota final é:" .$somanotas ."\n";

 #####################################################################   
    $nota = [7.5,8.0,6.3,9.2,5.4];
    $soma = 0;
    foreach($nota as $notas){
        $soma+=$notas;
        $media = $soma / count($nota);
    }
    echo "A medias das notas é:" .$media ."\n";
    
    ?>
</body>
</html>