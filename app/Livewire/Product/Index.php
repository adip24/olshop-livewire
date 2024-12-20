<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $paginate = 10;
    public $search;

    protected $updatesQueryString = [
        ['search' => true]
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $query = Product::query();

        if ($this->search !== null) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        return view('livewire.product.index', [
            'products' => $query->latest()->paginate($this->paginate)
        ]);
    }
}
