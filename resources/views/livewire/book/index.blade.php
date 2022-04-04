<div>
    <div class="flex flex-col">
        @if(session()->has('message'))
            <div class="w-auto px-4 py-4 mb-4 bg-green-100 pointer-events-none">
                <p class="text-sm text-2xl font-medium leading-5 text-green-700">
                    {{ session()->get('message') }}
                </p>
            </div>
        @endif
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                #
                            </th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Nome
                            </th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Páginas
                            </th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Autor
                            </th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse($books as $book)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $book->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $book->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $book->pages }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $book->author }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <a href="{{ route('books.edit', ['book' => $book->id]) }}">Editar</a>
                                <a href="{{ route('books.show', ['book' => $book->id]) }}">Ver</a>
                                <button wire:click="delete('{{ $book->id }}')" onclick="return confirm ('Deseja apagar o livro {{ $book->title }}?') ||event.stopImmediatePropagation()">Apagar</button>
                            </td>
                        </tr>
                        @empty
                            <p>Nenhum item encontrado...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $books->links() }}
            </div>
        </div>
    </div>
</div>
