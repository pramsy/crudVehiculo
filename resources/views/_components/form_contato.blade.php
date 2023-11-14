{{ $slot }}
<form method="POST" class="form_control" action="{{ route('site.contato') }}">
    @csrf
    @if($errors->any())
        <div style="color:red;" >
            @foreach($errors->all() as $erro)
                {{ $erro }} 
            @endforeach
        </div>
    @endif
    <div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ old('nome')}}" class="form-control" name="nome" >
            @if($errors->has('nome'))        
                {{ $errors->first('nome') }}           
            @endif
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" value="{{ old('celular')}}" class="form-control" name="celular" >
            @if($errors->has('celular'))        
                {{ $errors->first('celular') }}           
            @endif
        </div>
        <div class="mb-3">
            <label for="email"class="form-label">Email</label>
            <input type="email" value="{{ old('email')}}" class="form-control" name="email" >
            @if($errors->has('email'))        
                {{ $errors->first('email') }}           
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Motivo</label>
            <select class="form-control" name="motivo_contato" id="">
                <option value="">Selecione uma opção</option>
                @foreach($motivo_contato as $key=> $motivo)
                    <option value="{{$motivo->id}}" {{ old('motivo_contato') == $motivo->id ? 'selected':''}}>{{$motivo->motivo_contato}}</option>
                @endforeach
               
            </select>
            @if($errors->has('motivo_contato'))        
                {{ $errors->first('motivo_contato') }}           
            @endif
        </div>
        
        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea name="mensagem" id="mensagem" cols="30" rows="3" class="form-control">
                @if(old('mensagem') != '')
                    {{ old('mensagem')}}
                @endif
            </textarea>
            @if($errors->has('mensagem'))        
                {{ $errors->first('mensagem') }}           
            @endif
        </div>
        <div class="m-2 clearfix">
            <button type="button" class="btn btn-danger float-start"> Cancelar</button>

            <button type="submit" class="btn btn-primary float-end"> Enviar</button>
        </div>
    </div>

</form>
