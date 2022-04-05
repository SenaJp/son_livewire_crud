<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Show extends Component
{
    public $book;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.book.show');
    }
}
