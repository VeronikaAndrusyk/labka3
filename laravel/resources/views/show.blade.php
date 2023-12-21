<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інформація про рахунок</title>
</head>
<body>

<h1>Інформація про рахунок</h1>

<ul>
    <li>
        <strong>Код:</strong> {{ $account->code }}
    </li>
    <li>
        <strong>Ім'я:</strong> {{ $account->name }}
    </li>
    <li>
        <strong>Посада:</strong> {{ $account->position }}
    </li>
    <li>
        <strong>Зарплата:</strong> {{ $account->salary }}
    </li>
    <li>
        <strong>Кількість дітей:</strong> {{ $account->children_count }}
    </li>
    <li>
        <strong>Досвід:</strong> {{ $account->experience }}
    </li>
</ul>

</body>
</html>
