<!DOCTYPE html>
<html>
<head>
    <title>Редагування рахунку</title>
</head>
<body>

<h1>Редагування рахунку</h1>

<form action="/accounting/{{ $accounting->id }}" method="POST">
    @method('PUT')
    @csrf

    <label for="code">Код:</label><br>
    <input type="text" id="code" name="code" value="{{ $accounting->code }}"><br><br>

    <label for="name">Ім'я:</label><br>
    <input type="text" id="name" name="name" value="{{ $accounting->name }}"><br><br>

    <label for="position">Посада:</label><br>
    <input type="text" id="position" name="position" value="{{ $accounting->position }}"><br><br>

    <label for="salary">Зарплата:</label><br>
    <input type="text" id="salary" name="salary" value="{{ $accounting->salary }}"><br><br>

    <label for="children_count">Кількість дітей:</label><br>
    <input type="text" id="children_count" name="children_count" value="{{ $accounting->children_count }}"><br><br>

    <label for="experience">Досвід:</label><br>
    <input type="text" id="experience" name="experience" value="{{ $accounting->experience }}"><br><br>

    <button type="submit">Зберегти зміни</button>
</form>
    <form method="POST" action="{{ route('accounting.destroy', $accounting->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

</body>
</html>
{{--Ця сторінка дозволяє користувачеві змінити дані про рахунок, використовуючи
//форму для введення оновлених значень для кожного поля рахунку. Після натискання
//кнопки "Зберегти зміни" дані будуть відправлені на сервер для оновлення відповідного
//запису рахунку.--}}




