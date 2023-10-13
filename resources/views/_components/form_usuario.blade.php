<p class="text-center">Formulario de Cadastro</p>
<form  method="POST" class="form_control" action="{{ route('usuario') }}">
    @csrf
    <div class="form-group row" >
        <div class="form-group col-sm-6">
            <label for="">Nome Completo</label>
            <input class="form-control" type="text" name="nome">
        </div>
        <div class="form-group col-sm-6">
            <label for="">Data de Nascimento</label>
            <input class="form-control" type="date" name="data_nascimento">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">CPF</label>
            <input class="form-control" type="text" name="cpf">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Celular</label>
            <input class="form-control" type="text" name="celular">
        </div>
    
        <div class="form-group col-sm-4">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">CEP</label>
            <input class="form-control" type="text" name="cep">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Cidade</label>
            <input class="form-control" type="text" name="cidade">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Estado</label>
            <input class="form-control" type="text" name="estado">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="">Bairro</label>
            <input class="form-control" type="text" name="bairro">
        </div>
        <div class="form-group col-sm-3">
            <label for="">Rua</label>
            <input class="form-control" type="text" name="rua">
        </div>
        <div class="form-group col-sm-3">
            <label for="">Numero</label>
            <input class="form-control" type="text" name="numero">
        </div>
        <div class="form-group col-sm-3">
            <label for="">Complemento</label>
            <input class="form-control" type="text" name="complemento">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="">Login</label>
            <input class="form-control" type="text" name="login" maxlength="20" minlength="4">
        </div>
        <div class="form-group col-sm-3">
            <label for="">Confirm Login</label>
            <input class="form-control" type="text" name="login_confirm" >
        </div>
        <div class="form-group col-sm-3">
            <label for="">Senha</label>
            <input class="form-control" type="password" name="senha" minlength="8">
        </div>
        <div class="form-group col-sm-3">
            <label for="">Confirm Senha</label>
            <input class="form-control" type="password" name="senha_confirm">
        </div>

    </div>


    <div class="m-2 clearfix">
        <button type="button" class="btn btn-danger float-start"> Cancelar</button>

        <button type="submit" class="btn btn-primary float-end"> Enviar</button>
    </div>

</form>