<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Edit extends Component
{
    public Book $book;

    protected $rules = [
        'book.name' => 'required|string',
        'book.pages' => 'required|integer',
        'book.author' => 'required|string',
    ];

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function save()
    {
        $this->validate();
        $this->book->update($this->book->toArray());
        return redirect()->route('books.index');
    }

    public function render(book $book)
    {
        return view('livewire.book.edit', compact(['book' => $book]));
    }
}
