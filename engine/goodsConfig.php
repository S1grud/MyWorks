    <?php
    include "./config/config.php";
    $id = $_GET['id'];
    $sqlout = "select * from goods where id = $id";
    $res = mysqli_query($connect,$sqlout);
    $data = mysqli_fetch_assoc($res);
    ?>