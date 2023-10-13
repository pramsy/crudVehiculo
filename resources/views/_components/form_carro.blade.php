<p class="text-center">Cadastro de Carro</p>
<form  method="POST" class="form_control" action="{{ route('carro') }}">
    @csrf
    <div class="form-group row" >
        <div class="form-group ">
            <label for="">Model</label>
            <input class="form-control" type="text" name="model">
        </div>
        <div class="form-group ">
            <label for="">Marque</label>
            <input class="form-control" type="text" name="marca">
        </div>
    </div>
    <div class="row">
        <div class="form-group ">
            <label for="">Quantidade Portas</label>
            <input class="form-control" type="number" name="quantidade_portas">
        </div>    
    
        <div class="form-group ">
            <label for="">Ano Fabrocaçã</label>
            <input class="form-control" type="number" name="ano_fabricacao" >
        </div>
    </div>
    <div class="row">
    
        <div class="form-group ">
            <label for="">Tipo de cambio</label>
            <select class="form-control" name="tipo_cambio" id="">
                <option value="">Escolhe uma opção</option>
                <option value="1"> Manual</option>
                <option value="2">Automático</option>
                <option value="3">Automatizado</option>
            </select>
        </div>    
    
        <div class="form-group ">
            <label for="">Combustível</label>
            <select class="form-control" name="combustivle" id="">
                <option value="">Escolhe uma opção</option>
                <option value="1"> Flex</option>
                <option value="2">Gasolina</option>
                <option value="3">Álcool</option>
            </select>
        </div>
    </div>

    <div class="m-2 clearfix">
        <button type="button" class="btn btn-danger float-start"> Cancelar</button>
        <button type="submit" class="btn btn-primary float-end"> Enviar</button>
    </div>

</form>