<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Treinamento\CadastroTreinamento;
use Livewire\WithPagination;

class SearchTreinados extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $sortField = 'nome';

    public $index;

    protected $rules = [
        'search' => 'required|min:6'
    ];

    public function mount() {
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        $this->sortField = $field;
    }

    public function render()
    {



        $lista = CadastroTreinamento::
                                    where('nome','like', $this->search.'%')->
                                    orderBy($this->sortField)->
                                    paginate(15);

        return view('livewire.search-treinados', [
            'lista' => $lista,
        ]);
    }
}
