<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $paginate = 10;

    public function render()
    {
        return view('livewire.product.index', [
            'products' => Product::latest()->paginate($this->paginate)
        ]);
    }
}
