@include('partial/header')
<div>
    @include('partial/menuadmin')
</div>
<div class="row p-3"style="background-color:#E3F2FD;">
<div class="row text-center " style="background-color:#d0e7f7;">
    <h3>Administrador</h3>
</div>
    <div class="row">
        <div class="d-flex justify-content-end">    
            
            <a class="btn btn-light" href="{{ route('user.index') }}" role="button">Pesquisar</a>        
            <a class="btn btn-light" href="{{ route('user.listar') }}" role="button">Listar</a>       
    
        </div>
    </div>
    <div class="d-flex justify-content-center" style="width:50%; margin-left:auto;margin-right:auto;">
        
        @component('_components/form_usuario',['administrador'=>$administrador])
            
        @endcomponent
        
    </div>

    
</div>
@include('partial/footer')