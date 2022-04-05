<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        Book::whereId($id)->first()->delete();

    }

    public function render()
    {
        return view('livewire.book.index', [
            'books' => Book::paginate(10),
        ]);
    }
}
