<?php
    include "../config/config.php";

    $goodsBuy = $_POST['submit'];

    $sqlInCart = "INSERT INTO cart (`id_good`) VALUES ('$goodsBuy')";
    $resInCart = mysqli_query($connect,$sqlInCart);

    if($resInCart){
        echo "The commodity has been successfully added!";
        ?><a href="../goods.php?id=<?= $goodsBuy ?>">Go back</a><?
    } else {
        echo "An error occured, please try again.";
        echo mysqli_error($connect);
    }

?> 









