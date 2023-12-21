<form method="POST" action="/accounting" class="max-w-md mx-auto p-8 bg-gray-200 shadow-md rounded-md">
    @csrf
    @vite('resources/css/app.css')

    <div class="mb-4">
        <label for="code" class="block text-sm font-medium text-gray-700">Code:</label>
        <input type="text" id="code" name="code" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-pink-500">
    </div>

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
        <input type="text" id="name" name="name" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-pink-500">
    </div>

    <div class="mb-4">
        <label for="position" class="block text-sm font-medium text-gray-700">Position:</label>
        <input type="text" id="position" name="position" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-pink-500">
    </div>

    <div class="mb-4">
        <label for="salary" class="block text-sm font-medium text-gray-700">Salary:</label>
        <input type="text" id="salary" name="salary" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-pink-500">
    </div>

    <div class="mb-4">
        <label for="children_count" class="block text-sm font-medium text-gray-700">Number of Children:</label>
        <input type="number" id="children_count" name="children_count" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-pink-500">
    </div>

    <div class="mb-4">
        <label for="experience" class="block text-sm font-medium text-gray-700">Experience:</label>
        <input type="number" id="experience" name="experience" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-pink-500">
    </div>

    <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-pink-600 focus:outline-none focus:ring focus:border-pink-700">Create</button>
</form>
