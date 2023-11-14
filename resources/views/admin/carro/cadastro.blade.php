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
            
            <a class="btn btn-light" href="{{ route('admin.carro') }}" role="button">Pesquisar</a>
        
            <a class="btn btn-light" href="{{ route('admin.carro.listar') }}" role="button">Listar</a>       
    
        </div>
    </div>
    <div class="d-flex justify-content-center" style="width:50%; margin-left:auto;margin-right:auto;">
        <!--  -->  
          
        @include('_components/form_carro',['carro'=> $carro])
        <!--  -->        
    </div>
    
</div>
@include('partial/footer')