<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Index extends Component
{
    public $input;

    public function render()
    {
        return view('livewire.book.index');
    }
}
