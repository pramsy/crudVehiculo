@include('partial/header')
<div class="row p-3"style="background-color:#E3F2FD;">
    <div class="col-sm-6 p-4 m-1  ">
        @component('_components/form_usuario')
            
        @endcomponent
    </div>
    <div class="col-sm-3 p-1 m-1 text-center d-none d-md-none d-lg-block">
    Cadastro de usuario
    </div>
</div>
@include('partial/footer')