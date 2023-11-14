@include('partial/header')
<div>
    @include('partial/menuadmin')
</div>
<div class="row"style="background-color:#E3F2FD;">
    
    <div class="row text-center " style="background-color:#d0e7f7;">
        <h3>Carro</h3>
    </div>
    <div class="row">
        <div class="d-flex justify-content-end">    
            
            <a class="btn btn-light" href="{{ route('admin.carro.cadastrar') }}" role="button">Cadastrar</a>        
            <a class="btn btn-light" href="{{ route('admin.carro.listar') }}" role="button">Listar</a>       
    
        </div>
    </div>
    <div class="d-flex justify-content-center" style="width:25%; margin-left:auto;margin-right:auto;">
        
        <form action="{{ route('admin.carro.search') }}" metodo="GET">
            @csrf
            <div class="form-group row m-2">
                <input class="form-control" type="text" placeholder="Model" name="model">
            </div>
            <div class="form-group row m-2 ">
                <input class="form-control" type="text" placeholder="Marca" name="marca">
            </div>
            <div class="form-group row m-2 ">
                <button type="submit">procurar</button> 
            </div>           
        </form>
    </div>
    
</div>
@include('partial/footer')