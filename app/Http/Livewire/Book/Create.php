<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Create extends Component
{

    public Book $book;

    public function mount()
    {
        $this->book = new Book;
    }

    protected $rules = [
        'book.name' => 'required|string',
        'book.pages' => 'required|integer',
        'book.author' => 'required|string',
    ];

    public function save()
    {
        $this->validate(); // Validate the form data
        Book::create($this->book->toArray());
        session()->flash('message', 'Book created successfully.');
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.book.create');
    }
}
