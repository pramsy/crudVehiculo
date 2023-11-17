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
            <a class="btn btn-light" href="{{ route('user.listar') }}" role="button">Listar</a>    
        </div>
    </div>
    <div class="justify-content-center" style="width:40%; margin-left:auto;margin-right:auto;">
        <div  class="form_control">
            <div class="form-group row" >
                <div class="form-group col-sm-6">
                    <label for="">Nome Completo</label>
                    <input class="form-control" type="text" name="nome" value="{{ $administrador->nome }}" disabled>
                    
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Login</label>
                    <input class="form-control" type="text" name="login" maxlength="20" minlength="4" value="{{ $administrador->login }}" disabled>
                    
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Data de Nascimento</label>
                    <input class="form-control" type="date" name="data_nascimento" value="{{ $administrador->data_nascimento}}" disabled>
                   
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">CPF</label>
                    <input class="form-control" type="text" name="cpf" value="{{ $administrador->cpf }}" disabled>
                    
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Celular</label>
                    <input class="form-control" type="text" name="celular" value="{{ $administrador->celular }}" disabled>
                    
                </div>
            
                <div class="form-group col-sm-4">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ $administrador->email }}" disabled>
                    
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="">CEP</label>
                    <input class="form-control" type="text" name="cep" value="{{ $administrador->cep }}" disabled>
                    
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Cidade</label>
                    <input class="form-control" type="text" name="cidade" value="{{  $administrador->cidade }}" disabled>
                    
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Estado</label>
                    <input class="form-control" type="text" name="estado" value="{{ $administrador->estado }}" disabled>
                    
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="">Bairro</label>
                    <input class="form-control" type="text" name="bairro" value="{{ $administrador->bairro }}" disabled>
                    
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Rua</label>
                    <input class="form-control" type="text" name="rua" value="{{ $administrador->rua }}" disabled>
                    
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Numero</label>
                    <input class="form-control" type="text" name="numero" value="{{ $administrador->numero }}" disabled>
                   
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Complemento</label>
                    <input class="form-control" type="text" name="complemento" value="{{ $administrador->complemento }}" disabled>
                </div>
            </div>
            <div class="row">

            </div>


            

        </div>
       
    </div>
    
</div>

@include('partial/footer')