<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muziek</title>
</head>
<body>
    <header>
        <a href="">Algemene Voorwaarden</a>
        <a href="">Info</a>
        <button>Menu</button>
    </header>
    <div class="content"></div>
    <?php
    for($i=0; $i<10; $i++){
        include('../source/views/card.php');
    }
    ?>

</body>
</html>