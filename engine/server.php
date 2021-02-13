<?php
include "../config/config.php";

$name1 = $_POST['name'];
$review1 = $_POST['textReview']; 

$sqlin = "INSERT INTO reviews (`name`, `review`) VALUES ('$name1', '$review1')";

$result = mysqli_query($connect,$sqlin);

if($result){
    echo "Your review has been successfully saved!";
    ?> <a href="../reviews.php">Go back</a> <?
} else {
    echo "An error occured, please try again.";
    echo mysqli_error($connect);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////


