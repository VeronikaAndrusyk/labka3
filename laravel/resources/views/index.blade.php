<x-app-layout>

<h1>Список рахунків</h1>

<table border="1">
    <tr>
        <th>Код</th>
        <th>Ім'я</th>
        <th>Посада</th>
        <th>Зарплата</th>
        <th>Кількість дітей</th>
        <th>Досвід</th>
        <th>Дата створення</th>
        <th>Дата оновлення</th>
    </tr>

    @foreach($accountings as $account)
        <tr>
            <td>{{ $account->code }}</td>
            <td>{{ $account->name }}</td>
            <td>{{ $account->position }}</td>
            <td>{{ $account->salary }}</td>
            <td>{{ $account->children_count }}</td>
            <td>{{ $account->experience }}</td>
            <td>{{ $account->created_at }}</td>
            <td>{{ $account->updated_at }}</td>
        </tr>
    @endforeach
</table>

</x-app-layout>
{{--
//Ця сторінка відображає дані з бази даних у вигляді табличної
структури, що дозволяє користувачеві легко переглядати та аналізувати
дані про рахунки.--}}
