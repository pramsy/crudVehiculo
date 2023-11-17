@include('partial/header')
<div>
    @include('partial/menuadmin')
</div>
<div class="row"style="background-color:#E3F2FD;">
    <!-- <div class="col-sm-8 p-4 m-1  ">
        @component('_components/form_carro')
            
        @endcomponent
    </div> -->
    <div class="row text-center " style="background-color:#d0e7f7;">
        <h3>Carro</h3>
    </div>
    <div class="row">
        <div class="d-flex justify-content-end">    
            
            <a class="btn btn-light" href="{{ route('admin.carro.cadastrar') }}" role="button">Cadastrar</a>
        
            <a class="btn btn-light" href="{{ route('admin.carro') }}" role="button">Pesquisar</a>       
    
        </div>
    </div>
    <div class="justify-content-center" style="width:50%; margin-left:auto;margin-right:auto;">
        @if(!empty($carros) && $carros->count() > 0)
            <div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="text-center">Model</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Ano Fabrocação</th>
                        <th class="text-center">Qtd Portas</th>
                        <th class="text-center">Combustivel</th>
                        <th class="text-center">Cambio</th>
                        <th class="text-center">Acôes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carros as $carro)
                        <tr>
                            <td>{{ $carro->model }}</td>
                            <td>{{ $carro->marca }}</td>
                            <td>{{ $carro->ano_fabricacao }}</td>
                            <td>{{ $carro->quantidade_portas }}</td>
                            <td>{{ $carro->combustivel()->first()->combustivel }}</td>
                            <td>{{ $carro->tipo_cambio()->first()->tipo_cambio }}</td>
                            <td>
                                <a class="btn btn-light" href="{{ route('admin.carro.editar', ['id' => $carro->id]) }}" role="button"> <i class="fa-solid fa-pen-to-square"></i> </a>        
                                <a class="btn btn-light" href="{{ route('admin.carro.delete', ['id' => $carro->id]) }}" role="button"> <i class="fa-regular fa-trash-can"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="float-end">
                <div class=""> {{ $carros->appends($request)->links() }}</div>
                <div class=""> Pagina {{ $carros->count() }} de {{ $carros->total() }} De ({{$carros->firstItem() }} até {{$carros->lastItem() }})</div>
            </div>
        @else
            <p>Nenhum caro registrado</p>
        @endif    
    </div>
    
</div>

@include('partial/footer')