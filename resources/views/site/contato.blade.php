@include('partial/header')
    <div>
        @include('partial/menutop')
    </div>
   <div class="row p-3"style="background-color:#E3F2FD;">
        <p class="fw-bold text-center bd-blue-200" style="background-color:#90CAF9">Entrar em contato com agente</p>
        <div class="col-sm-6 p-1 m-1 ">
            <p>
                Estamos sempre disposto a te ouvi.<br>
                Para as suas sugestões ou reclamação,
                 manda uma mensagem para a gente.
            </p>
        </div>
        <div class="col-sm-4 p-1 m-1 border border-secondary "  >
            @component('_components/form_contato',['motivo_contato'=>$motivo_contato])
                <p class="text-center"> Vamos analisar a sua mensagem e te responder o mais breve possivel</p>
                <p class="text-center" >  tempo de resposta é de atè 48 horas</p>
            @endcomponent
        </div>
    </div>
@include('partial/footer')