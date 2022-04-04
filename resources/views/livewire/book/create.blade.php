<div>
    <form wire:submit.prevent="save" class="w-full">
	    <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="name">
                Nome
            </label>
            <input wire:model="book.name" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white" type="text" id="name" />
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="pages">
                Quantidade de Páginas
            </label>
            <input wire:model="book.pages" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white" type="number" id="pages" />
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="author">
                Autor
            </label>
            <input wire:model="book.author" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white" type="text" id="author" />
    	</div>
        <button type="submit">Cadastrar</button>
    </form>
</div>
