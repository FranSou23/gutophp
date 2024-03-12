<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Jogos</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jogos 🕹🎮</h1>
    <?php
    $banners = ["1.jpg", "2.jpg" ,"3.jpg" ,"4.jpg"];
    $sorteio = rand (0,3);
    echo "<img src='$banners[$sorteio]' class='imagem-banner'>";

    ?>
    <div class="lista">
    <?php
    $jogos = ["Call of duty", "Minecraft", "Left 4 dead", "GTA", "Resident Evil", "Super Mario" ];
    $capas = ["callofduty.jpg", "Minecraft.jpg" , "Left4Dead2.jpg", "GTA.jpg", "ResidentEvil.jpg", "SuperMario.png" ];
 
    $numero_jogos = count($jogos);
    $contador = 0;
    while($contador < $numero_jogos){
        echo "<div class='card'>";
        echo "<img src='$capas[$contador]'>";
        echo "<br> $jogos[$contador]";
        echo "</div>";
        $contador++;
 
    }
 
    ?>
    </div>
</body>
</html>