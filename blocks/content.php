<?php

include "./config/config.php";
$sql = "select * from images";
$res = mysqli_query($connect, $sql);

while ($data = mysqli_fetch_assoc($res)) : ?>
    <a href="<?= $data['path']; ?>" target="_blanc"><img class="img" src="/PhpLesson5/img/small/<?= $data['name']; ?>"></a>
<?php
endwhile;
?>