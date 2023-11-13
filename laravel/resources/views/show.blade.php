<!DOCTYPE html>
<html>
<head>
    <title>Інформація про рахунок</title>
</head>
<body>

<h1>Інформація про рахунок</h1>

<ul>
    <li><strong>Код:</strong> {{ $account->code }}</li>
    <li><strong>Ім'я:</strong> {{ $account->name }}</li>
    <li><strong>Посада:</strong> {{ $account->position }}</li>
    <li><strong>Зарплата:</strong> {{ $account->salary }}</li>
    <li><strong>Кількість дітей:</strong> {{ $account->children_count }}</li>
    <li><strong>Досвід:</strong> {{ $account->experience }}</li>
</ul>

</body>
</html>

{{--//я сторінка відображає детальну інформацію про конкретний рахунок,
таку як код, ім'я, посада, зарплата, кількість дітей та досвід,
у вигляді невпорядкованого списку, що дозволяє користувачеві легко
переглядати цю інформацію.--}}
