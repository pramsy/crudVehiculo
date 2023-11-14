@include('partial/header')
    <div>
        @include('partial/menutop')
    </div>
    <div style="width:30%; margin-left:auto;margin-right:auto;">
        <p class="user-select-none text-center"> Faça seu login</p>
        <form method="post"action="{{ route('site.login') }}">
        @csrf
            <div class="form-group row" >
                <div class="form-group ">
                    <label for="">Login</label>
                    <input class="form-control" type="text" name="email">
                    @if($errors->has('email'))        
                        {{ $errors->first('email') }}           
                    @endif
                </div>
                <div class="form-group ">
                    <label for="">Senha</label>
                    <input class="form-control" type="password" name="password">
                    @if($errors->has('password'))        
                        {{ $errors->first('password') }}           
                    @endif
                </div>
            </div>
            <div class="m-2 clearfix">
                <button type="button" class="btn btn-danger float-start"> Cancelar</button>
                <button type="submit" class="btn btn-primary float-end"> Enviar</button>
            </div>
        </form>
        {{ isset($error) && $error != '' ? $error : '' }}
    </div>
@include('partial/footer')