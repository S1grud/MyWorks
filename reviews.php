<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="./css/style.css">
    <? include "./config/config.php" ?>
</head>
<body>
    <div class="wrapper">

        <div class="container">
            <h1 class="header">Reviews</h1>
            <? include "./blocks/menu.html"; ?>
        </div>

        <div class="container">
            <div class="reviewAll">
                    <?  
                    $sqlout = "select * from reviews";
                    $res = mysqli_query($connect,$sqlout);

                    while($data = mysqli_fetch_assoc($res)):?>
                        <div class="reviewStyle">
                            <p><?= $data['name']; ?></p> 
                            <p><?= $data['review']; ?></p>
                            <p><?= $data['date']; ?></p>
                        </div>
                    <?php
                        endwhile;
                    ?>
                

                <div class="container">
                    <form class="form" action="./engine/server.php" method="POST">
                        <input class="inputName" name="name" class="inputName" type="text" placeholder="Your Name">
                        <textarea class="textareaReview" name="textReview" cols="30" rows="10" placeholder="Your review"></textarea>
                        <input class="submit" name="send" type="submit" value="Send">
                    </form>
                </div>
            </div>
        <div class="container">
            <? include "./blocks/footer.php"; ?>
        </div> 

    </div>
</body>
</html>