<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <? include "./config/config.php"; ?>
</head>
<body>
<div class="wrapper">
    <div class="container">
            <h1 class="header">Cart</h1>
            <? 
            include "./blocks/menu.html";
            ?>
    </div>

    <div class="container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <? include "./engine/cartGoodsOut.php"; ?>
            </table>
            
    </div>

    <div class="container">
            <? 
            include "./blocks/footer.php"; 
            ?>
    </div>
</div>
</body>
</html>