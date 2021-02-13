<?php

include "./config/config.php";

$sqlout = "select * from goods";
$res = mysqli_query($connect,$sqlout);
?> 
<div class="content"> <? while($data = mysqli_fetch_assoc($res)):?>
    <div class="goods<?=$data['id'];?> goods">
        <?$_GET['id'] = $data['id'];?>  
        <a href="goods.php?id=<?= $_GET['id']?>"><h2 class="goodsName"><?= $data['name'];?></h2></a>
        <a href="goods.php?id=<?= $_GET['id']?>"><img class="img" src="./img/small/<?=$data['img'];?>" alt="<?=$data['name'];?>"></a> 
        <p class="price">Price: &#8364;<?= $data['price'];?></p>
    </div>

    <?php
        endwhile;
    ?>
</div>