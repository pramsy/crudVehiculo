@include('partial/header')
<div>
    @include('partial/menuadmin')
</div>
<div class="row p-3"style="background-color:#E3F2FD;">
    <div class="row">
        <div class="d-flex justify-content-end">    
            
            <a class="btn btn-light" href="{{ route('admin.usuario.cadastrar') }}" role="button">Cadastrar</a>        
            <a class="btn btn-light" href="{{ route('admin.usuario.listar') }}" role="button">Listar</a>       
    
        </div>
    </div>
    <div class="d-flex justify-content-center" style="width:25%; margin-left:auto;margin-right:auto;">
        @component('_components/form_usuario')
            
        @endcomponent
        
    </div>

    
</div>
@include('partial/footer')