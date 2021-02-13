<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goods</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="wrapper">

        <div class="container">
            <? 
            include "./engine/goodsConfig.php";
            include "./blocks/menu.html";
            ?>
        </div>

        <div class="container">
            <h2 class="nameMain"><?= $data['name'];?></h2>
            <div class="goods<?=$data['id'];?> goodsMain">
                <?$_GET['id'] = $data['id'];?> 
                <div class="imgPrice">
                    <a href="index.php?id=<?= $_GET['id']?>"><img class="imgMain" src="./img/big/<?=$data['img'];?>" alt="<?=$data['name'];?>"></a> 
                    <p class="priceMain">Price: &#8364;<?= $data['price'];?></p>
                    <form class="buttonForm" action="./engine/cartGoodsIN.php" method="POST">
                        <button class="button buy" type="submit" name="submit" value="<?=$_GET['id']?>">BUY</button>
                    </form>
                </div>
                <div class="descrip">
                    <p class="descripMain"><?= $data['descrip']; ?></p>
                </div>
            </div>
        </div>

        <div class="container">
            <? include "./blocks/footer.php"; ?>
        </div>

    </div>
</body>
</html>