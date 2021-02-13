<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineShop</title>
    <link rel="stylesheet" href="./css/style.css">
    <? include "./config/config.php"; ?>
</head>
<body>
    <div class="wrapper">

        <div class="container">
            <h1 class="header">OnShop</h1>
            <? 
            include "./blocks/menu.html";
            ?>
        </div>

        <div class="container">
            <? 
            include "./blocks/goodsContent.php"; 
            ?>
        </div>

        <div class="container">
            <? 
            include "./blocks/footer.php"; 
            ?>
        </div>

    </div>
</body>
</html>