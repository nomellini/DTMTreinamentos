<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Treinamento\CadastroTreinamento;
use Livewire\WithPagination;

class SearchUsers extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $sortField = 'nome';
    public $sortDirection = 'asc';

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
        sleep(1);
        $lista = CadastroTreinamento::where('nome','like', '%' . $this->search.'%')->
                                    OrWhere('email','like', '%' . $this->search.'%')->
                                    orderBy($this->sortField)->
                                    paginate(10);

        return view('livewire.search-users', [
            'lista' => $lista,
        ]);
    }
}
