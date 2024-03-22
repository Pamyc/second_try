<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пример</title>
</head>
<body>
<h1>Введите значения</h1>

<?php
// Количество кнопок
$numberOfButtons = 10; // Измените это значение для изменения количества кнопок

for ($i = 0; $i < $numberOfButtons; $i++) {
    ?>
<form action="/result" method="post">
    <input type="number" name="value" placeholder="Введите значение">
    <button type="submit">Отправить</button>
</form>
    <?php
}
?>
</body>
</html>
