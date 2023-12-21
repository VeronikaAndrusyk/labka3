<!DOCTYPE html>
<html lang="">

<head>
    <title>Редагування рахунку</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-md shadow-md max-w-md w-full">
    <h1 class="text-2xl font-bold mb-6">Редагування рахунку</h1>

    <form action="/accounting/{{ $accounting->id }}" method="POST" class="mb-8">
        @method('PUT')
        @csrf

        <div class="mb-4">
            <label for="code" class="text-gray-700 block">Код:</label>
            <input type="text" id="code" name="code" value="{{ $accounting->code }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="name" class="text-gray-700 block">Ім'я:</label>
            <input type="text" id="name" name="name" value="{{ $accounting->name }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="position" class="text-gray-700 block">Посада:</label>
            <input type="text" id="position" name="position" value="{{ $accounting->position }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="salary" class="text-gray-700 block">Зарплата:</label>
            <input type="text" id="salary" name="salary" value="{{ $accounting->salary }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="children_count" class="text-gray-700 block">Кількість дітей:</label>
            <input type="text" id="children_count" name="children_count" value="{{ $accounting->children_count }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="experience" class="text-gray-700 block">Досвід:</label>
            <input type="text" id="experience" name="experience" value="{{ $accounting->experience }}" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-700">Зберегти зміни</button>
    </form>

    <form method="POST" action="{{ route('accounting.destroy', $accounting->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:border-red-700">Delete</button>
    </form>
</div>

</body>

</html>
