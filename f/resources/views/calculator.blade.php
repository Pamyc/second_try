<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<h1>Калькулятор</h1>
<form action="/calculator" method="post">
    <input type="number" name="first_number" placeholder="Первое число">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="second_number" placeholder="Второе число">
    <button type="submit">Рассчитать</button>
</form>

@if (isset($result))
    <p>Результат: {{ $result }}</p>
@endif
</body>
</html>
