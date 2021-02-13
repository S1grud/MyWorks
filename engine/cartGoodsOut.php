<?php
    include "./config/config.php";
    include "./engine/cartDelete.php";

    $sqlGoodsOut = "SELECT * FROM cart";
    $resGoodsOut = mysqli_query($connect,$sqlGoodsOut);
?>
    <div class="cart">
        <?  
        while($dataCart = mysqli_fetch_assoc($resGoodsOut)):
            $id = $dataCart['id_good'];
            $sqlGoodsInfo = "SELECT * FROM goods WHERE id=$id";
            $resGoodsInfo = mysqli_query($connect,$sqlGoodsInfo);
            $goodInfo = mysqli_fetch_assoc($resGoodsInfo);    
        ?>
                <tr>
                    <td><?=$goodInfo['name']?></td>
                    <td><?=$goodInfo['price']?></td>
                    <td><button value="<?=goodDelete($dataCart['id_good'])?>">Delete</button></td>
                </tr>

        <? 
            endwhile; 
        ?>
    </div>