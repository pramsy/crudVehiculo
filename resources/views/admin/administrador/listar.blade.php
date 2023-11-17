@include('partial/header')
<div>
    @include('partial/menuadmin')
</div>
<div class="row"style="background-color:#E3F2FD;">
   
    <div class="row text-center " style="background-color:#d0e7f7;">
        <h3>Administrador</h3>
    </div>
    <div class="row">
        <div class="d-flex justify-content-end">    
            
            <a class="btn btn-light" href="{{ route('user.create') }}" role="button">Cadastrar</a>
        
            <a class="btn btn-light" href="{{ route('user.index') }}" role="button">Pesquisar</a>       
    
        </div>
    </div>
    <div class="justify-content-center" style="width:50%; margin-left:auto;margin-right:auto;">
        @if(!empty($administradores) && $administradores->count() > 0)
            <div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="test-center">Nome</th>
                        <th class="test-center">email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($administradores as $administrador)
                        <tr>
                            <td>{{ $administrador->nome }}</td>
                            <td>{{ $administrador->email }}</td>
                            <td>
                                <a class="btn" href="{{ route('user.show', ['id' => $administrador]) }}" role="button"> <i class="fa-brands fa-readme"></i></i> </a>        
                            </td>
                            <td>
                                <a class="btn" href="{{ route('user.edit', ['id' => $administrador]) }}" role="button"> <i class="fa-solid fa-pen-to-square"></i> </a>        
                            </td>
                            <td>
                                <form id="form_{{$administrador->id}}" method="post" action="{{ route('user.destroy', ['id' => $administrador]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn border-0" onclick="document.getElementById('form_{{$administrador->id}}'.submit()"> <i class="fa-regular fa-trash-can"></i> </button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="float-end">
                <div class=""> {{ $administradores->appends($request)->links() }}</div>
                <div class=""> Pagina {{ $administradores->count() }} de {{ $administradores->total() }} De ({{$administradores->firstItem() }} até {{$administradores->lastItem() }})</div>
            </div>
        @else
            <p>Nenhum administrador registrado</p>
        @endif    
    </div>
    
</div>

@include('partial/footer')