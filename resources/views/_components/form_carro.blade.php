
<form  method="POST" class="form_control" action="{{ route('user.store') }}">
    <input type="hidden" name="id" value="{{ $carro->id ?? ''  }}">
    @csrf
    <div class="form-group row" >
        <div class="form-group ">
            <label for="">Model</label>
            <input class="form-control" type="text" name="model" value="{{ $carro->model ?? old('model') }}">
            <span class="text-danger">
                @if($errors->has('model'))        
                    {{ $errors->first('model') }}           
                @endif
            </span>
        </div>
        <div class="form-group ">
            <label for="">Marque</label>
            <input class="form-control" type="text" name="marca" value="{{ $carro->marca ?? old('marca') }}">
            <span class="text-danger">
                @if($errors->has('marca'))        
                    {{ $errors->first('marca') }}           
                @endif
            </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group ">
            <label for="">Quantidade Portas</label>
            <input class="form-control" type="number" name="quantidade_portas" value="{{ $carro->quantidade_portas ?? old('quantidade_portas') }}">
            <span class="text-danger">
                @if($errors->has('quantidade_portas'))        
                    {{ $errors->first('quantidade_portas') }}           
                @endif
            </span>
        </div>    
    
        <div class="form-group ">
            <label for="">Ano Fabricação</label>
            <input class="form-control" type="number" name="ano_fabricacao" value="{{ $carro->ano_fabricacao ?? old('ano_fabricacao') }}">
            <span class="text-danger">
                @if($errors->has('ano_fabricacao'))        
                    {{ $errors->first('ano_fabricacao') }}           
                @endif
            </span>
        </div>
    </div>
    <div class="row">
    
        <div class="form-group ">
            <label for="">Tipo de cambio</label>
            <select class="form-control" name="tipo_cambio_id" id="">
                <option value="">Escolhe uma opção</option>                
                @foreach(DB::table('tipo_cambios')->get() as $tipo)
                        <option value="{{ $tipo->id }}" @if(!empty($carro) && $tipo->id == $carro->tipo_cambio_id) selected @endif
                     > {{ $tipo->tipo_cambio }}</option>
    
                @endforeach                
            </select>
            <span class="text-danger">
                @if($errors->has('tipo_cambio'))        
                    {{ $errors->first('tipo_cambio') }}           
                @endif
            </span>
        </div>    
    
        <div class="form-group ">
            <label for="">Combustível</label>
            <select class="form-control" name="combustivel_id" id="">
                <option value="">Escolhe uma opção</option>
                @foreach(DB::table('combustivels')->get() as $value)
                    <option value="{{ $value->id }}" @if(!empty($carro) && $value->id == $carro->combustivel_id) selected @endif> {{ $value->combustivel }}</option>
                @endforeach
                

            </select>
            <span class="text-danger">
                @if($errors->has('combustivel'))        
                    {{ $errors->first('combustivel') }}           
                @endif
            </span>
            
        </div>
    </div>

    <div class="m-2 clearfix">
        <button type="button" class="btn btn-danger float-start"> Cancelar</button>
        <button type="submit" class="btn btn-primary float-end"> Salvar</button>
    </div>

</form>