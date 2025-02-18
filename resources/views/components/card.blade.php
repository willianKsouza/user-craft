<div class="max-w-2xs mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="bg-blue-500 text-white px-6 py-4">
        <h2 class="text-xl font-semibold">Informações do Usuário</h2>
    </div>

    <div class="p-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nome
            </label>
            <p class="text-gray-900 text-base">{{ $name }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <p class="text-gray-900 text-base">{{ $email }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                Endereço
            </label>
            <p class="text-gray-900 text-base">{{ $address }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                Telefone
            </label>
            <p class="text-gray-900 text-base">{{ $phone }}</p>
        </div>
    </div>

    <div class="bg-gray-100 px-6 py-4">
        <button class="bg-blue-500 text-white px-4 py-2 mr-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Editar
        </button>

        <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Excluir
        </button>
    </div>
</div>
