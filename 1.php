<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <? include "server.php" ?>
</head>
<body>
    <form action="1.php" method="POST">
        <p>Введите числа в поля</p>
        <input name="firstNum" type="text">
        <select name="Otype">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input name="secondNum" type="text">
        <input name="equals" type="submit" value="=">

        <? mathOperation($_POST['firstNum'], $_POST['secondNum'], $_POST['Otype']); ?>
    </form>
</body>
</html>