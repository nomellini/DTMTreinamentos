<div>
    <style>
        .opaco {
            opacity: 0.2;
        }
    </style>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="row">



        <div class="card container-fluid">
            <div class="card-header">
                Filtro <input wire:model.debounce.250ms="search" type="text" placeholder="Pesquisar..."/>
            </div>

            <div class="card-body" wire:loading.class.delay='opaco'>
                <table class="table  table-hover table-sm width='1200px">
                    <thead>
                        <tr>
                            <th wire:click="sortBy('nome')" >Nome</th>
                            <th wire:click="sortBy('email')">Email</th>
                            <th wire:click="sortBy('cargo')">Cargo</th>
                            {{-- <th>Ações</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($lista as $item)
                        <tr >
                            <td>{{$item->nome}} </td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->cargo}}</td>
                            {{-- <td> <a href="{{ route('site.treinamento.lista', ['id' => $item->id]) }}" class="btn btn-warning">ok</a>             </td> --}}
                        </tr>
                        @empty
                        <tr >
                            <td colspan="3">Sem resultados para pesquisa de <b>{{ $search }}</b></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $lista->links() }}
            </div>
            </div>
        </div>


</div>
