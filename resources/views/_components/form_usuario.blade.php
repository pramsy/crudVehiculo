@if(isset($administrador->id))
<form  method="POST" class="form_control" action="{{ route('user.update',['id'=>$administrador->id]) }}">
    @csrf
    @method('PUT')
    <div class="text-center mb-3" ><h3>Editar</h3></div>
@else
<form  method="POST" class="form_control" action="{{ route('user.store') }}">
    @csrf
    <div class="text-center mb-3" ><h3>Novo</h3></div>

@endif
    <div class="form-group row" >
        <div class="form-group col-sm-6">
            <label for="">Nome Completo</label>
            <input class="form-control" type="text" name="nome" value="{{$administrador->nome ?? old('nome')}}">
            <span class="text-danger">
                @if($errors->has('nome'))        
                    {{ $errors->first('nome') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-6">
            <label for="">Data de Nascimento</label>
            <input class="form-control" type="date" name="data_nascimento"value="{{ $administrador->data_nascimento ?? old('data_nascimento')}}">
            <span class="text-danger">
                @if($errors->has('data_nascimento'))        
                    {{ $errors->first('data_nascimento') }}           
                @endif
            </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">CPF</label>
            <input class="form-control" type="text" name="cpf" value="{{ $administrador->cpf ?? old('cpf')}}">
            <span class="text-danger">
                @if($errors->has('cpf'))        
                    {{ $errors->first('cpf') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Celular</label>
            <input class="form-control" type="text" name="celular" value="{{ $administrador->celular ?? old('celular')}}">
            <span class="text-danger">
                @if($errors->has('celular'))        
                    {{ $errors->first('celular') }}           
                @endif
            </span>
        </div>
    
        <div class="form-group col-sm-4">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" value="{{ $administrador->email ?? old('email')}}">
            <span class="text-danger">
                @if($errors->has('email'))        
                    {{ $errors->first('email') }}           
                @endif
            </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">CEP</label>
            <input class="form-control" type="text" name="cep" value="{{ $administrador->cep ?? old('cep')}}">
            <span class="text-danger">
                @if($errors->has('cep'))        
                    {{ $errors->first('cep') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Cidade</label>
            <input class="form-control" type="text" name="cidade" value="{{ $administrador->cidade ?? old('cidade')}}">
            <span class="text-danger">
                @if($errors->has('cidade'))        
                    {{ $errors->first('cidade') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Estado</label>
            <input class="form-control" type="text" name="estado" value="{{ $administrador->estado ?? old('estado')}}">
            <span class="text-danger">
                @if($errors->has('estado'))        
                    {{ $errors->first('edtado') }}           
                @endif
            </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="">Bairro</label>
            <input class="form-control" type="text" name="bairro" value="{{ $administrador->bairro ?? old('bairro')}}">
            <span class="text-danger">
                @if($errors->has('bairro'))        
                    {{ $errors->first('bairro') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-3">
            <label for="">Rua</label>
            <input class="form-control" type="text" name="rua" value="{{ $administrador->rua ?? old('rua')}}">
            <span class="text-danger">
                @if($errors->has('rua'))        
                    {{ $errors->first('rua') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-3">
            <label for="">Numero</label>
            <input class="form-control" type="text" name="numero" value="{{ $administrador->numero ?? old('numero')}}">
            <span class="text-danger">
                @if($errors->has('rua'))        
                    {{ $errors->first('rua') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-3">
            <label for="">Complemento</label>
            <input class="form-control" type="text" name="complemento" value="{{ $administrador->complemento ?? old('complemento')}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="">Login</label>
            <input class="form-control" type="text" name="login" maxlength="20" minlength="4" value="{{ $administrador->login ?? old('login')}}">
            <span class="text-danger">
                @if($errors->has('login'))        
                    {{ $errors->first('login') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-3">
            <label for="">Confirmar Login</label>
            <input class="form-control" type="text" name="login_confirm" value="{{ $administrador->login ?? old('login_confirm') }}">
            <span class="text-danger">
                @if($errors->has('login_confirm'))        
                    {{ $errors->first('login_confirm') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-3">
            <label for="">Senha</label>
            <input class="form-control" type="password" name="senha" minlength="8" value="{{ $administrador->senha ?? old('senha')}}">
            <span class="text-danger">
                @if($errors->has('senha'))        
                    {{ $errors->first('senha') }}           
                @endif
            </span>
        </div>
        <div class="form-group col-sm-3">
            <label for="">Confirmar Senha</label>
            <input class="form-control" type="password" name="senha_confirm" value="{{ $administrador->senha ?? old('senha_confirm') }}">
            <span class="text-danger">
                @if($errors->has('senha_confirm'))        
                    {{ $errors->first('senha_confirm') }}           
                @endif
            </span>
        </div>

    </div>


    <div class="m-2 clearfix">
        <button type="button" class="btn btn-danger float-start"> Cancelar</button>

        <button type="submit" class="btn btn-primary float-end"> Enviar</button>
    </div>

</form>