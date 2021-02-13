<?php

    function goodDelete($id){
        $sqlGoodsInfo = "DELETE * FROM cart WHERE id_good=$id";
        $resGoodsInfo = mysqli_query($connect,$sqlGoodsInfo);
        $goodInfo = mysqli_fetch_assoc($resGoodsInfo);
        return $goodInfo;
    }