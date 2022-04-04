<div>
    <div>
        <table class="w-full table-auto">
            <tbody>
                <tr>
                    <td class="px-4 py-2 border"><strong>ID</strong></td>
                    <td class="px-4 py-2 border">{{ $book->id }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border"><strong>Nome</strong></td>
                    <td class="px-4 py-2 border">{{ $book->name }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border"><strong>Número de páginas</strong></td>
                    <td class="px-4 py-2 border">{{ $book->pages }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border"><strong>Autor</strong></td>
                    <td class="px-4 py-2 border">{{ $book->author }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mx-auto mt-8 max-w-7xl sm:px-6 lg:px-8">
            <a href="{{ route('books.index') }}"
                class="px-4 py-2 font-bold bg-blue-500 border-b-4 border-blue-700 rounded hover:bg-blue-400 hover:border-blue-500">
                Voltar
            </a>
        </div>
    </div>
</div>
