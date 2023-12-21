<x-app-layout>

    <h1 class="text-center text-2xl font-bold my-4">Список рахунків</h1>

    <table class="min-w-full border border-gray-300 bg-pink-200">
        <thead>
        <tr>
            <th class="py-2 px-4">Код</th>
            <th class="py-2 px-4">Ім'я</th>
            <th class="py-2 px-4">Посада</th>
            <th class="py-2 px-4">Зарплата</th>
            <th class="py-2 px-4">Кількість дітей</th>
            <th class="py-2 px-4">Досвід</th>
            <th class="py-2 px-4">Дата створення</th>
            <th class="py-2 px-4">Дата оновлення</th>
        </tr>
        </thead>
        <tbody>
        @foreach($accountings as $account)
            <tr>
                <td class="py-2 px-4 border">{{ $account->code }}</td>
                <td class="py-2 px-4 border">{{ $account->name }}</td>
                <td class="py-2 px-4 border">{{ $account->position }}</td>
                <td class="py-2 px-4 border">{{ $account->salary }}</td>
                <td class="py-2 px-4 border">{{ $account->children_count }}</td>
                <td class="py-2 px-4 border">{{ $account->experience }}</td>
                <td class="py-2 px-4 border">{{ $account->created_at }}</td>
                <td class="py-2 px-4 border">{{ $account->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-app-layout>
