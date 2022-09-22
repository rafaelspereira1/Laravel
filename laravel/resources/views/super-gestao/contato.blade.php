@extends('layouts.basic')

@section('title', 'Super Gestão - Contato')

@section('header')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form action="{{ route('gestao.contato') }}" method="GET">
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <br>
                    <input type="text" name="telefone" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select class="borda-preta">
                        <option value="" disabled selected>Qual o motivo do contato?</option>
                        <option value="1">Dúvida</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <textarea name="mensagem" class="borda-preta" placeholder="Preencha aqui a sua mensagem"></textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('/assets/img/facebook.png') }}">
            <img src="{{ asset('/assets/img/linkedin.png') }}">
            <img src="{{ asset('/assets/img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src=/assets/img/mapa.png">
        </div>
    </div>
@endsection
