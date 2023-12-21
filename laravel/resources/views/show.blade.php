<!DOCTYPE html>
<html lang="en">

<head>
    <title>Інформація</title>

</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-md shadow-md max-w-md w-full">
    <h1 class="text-2xl font-bold mb-6">Інформація про рахунок</h1>

    <table class="table-auto w-full">
        <tbody>
        <tr>
            <td class="border px-4 py-2"><strong>Код:</strong></td>
            <td class="border px-4 py-2">{{ $account->code }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2"><strong>Ім'я:</strong></td>
            <td class="border px-4 py-2">{{ $account->name }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2"><strong>Посада:</strong></td>
            <td class="border px-4 py-2">{{ $account->position }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2"><strong>Зарплата:</strong></td>
            <td class="border px-4 py-2">{{ $account->salary }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2"><strong>Кількість дітей:</strong></td>
            <td class="border px-4 py-2">{{ $account->children_count }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2"><strong>Досвід:</strong></td>
            <td class="border px-4 py-2">{{ $account->experience }}</td>
        </tr>
        </tbody>
    </table>
</div>

</body>

</html>
