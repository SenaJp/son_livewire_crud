<div>
    <form wire:submit.prevent="save" class="w-full">
	    <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="name">
                Nome
            </label>
            <input wire:model="book.name" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white" type="text" id="name" />
            @if($errors->has('book.name'))
                <p class="text-xs italic text-red-500">{{ $errors->first('book.name') }}</p>
            @endif
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="pages">
                Quantidade de Páginas
            </label>
            <input wire:model="book.pages" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white" type="number" id="pages" />
            @if($errors->has('book.pages'))
                <p class="text-xs italic text-red-500">{{ $errors->first('book.pages') }}</p>
            @endif
    	</div>
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="author">
                Autor
            </label>
            <input wire:model="book.author" class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-100 border rounded appearance-none focus:outline-none focus:bg-white" type="text" id="author" />
            @if($errors->has('book.author'))
                <p class="text-xs italic text-red-500">{{ $errors->first('book.author') }}</p>
            @endif
    	</div>
        <button type="submit">Atualizar</button>
    </form>
</div>
