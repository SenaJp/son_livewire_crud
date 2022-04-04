<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Show extends Component
{

    public function mount(book $book)
    {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.book.show');
    }
}
