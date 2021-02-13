<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <? include "server.php"; ?>
</head>
<body>
    <form class="form" action="2.php" method="POST">
        <p>Введите числа в поля</p>
        <input cla name="firstNum" type="text">
        <input cla name="secondNum" type="text"><br>
        <button name="Otype" value="+">+</button>
        <button name="Otype" value="-">-</button>
        <button name="Otype" value="*">*</button>
        <button name="Otype" value="/">/</button>
        <br>
        <?= mathOperation($_POST['firstNum'], $_POST['secondNum'], $_POST['Otype']); ?>
    </form>
</body>
</html>