@extends('layouts.app') 

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Solicitação de Reserva') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('reserva.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="data_hora_reserva">{{ __('Selecione a data e hora da reserva') }}</label>
                                <input type="datetime-local" id="data_hora_reserva" name="data_hora_reserva" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pacote_comidas">{{ __('Pacote de Comidas Escolhido') }}</label>
                                <input type="text" id="pacote_comidas" name="pacote_comidas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="quantidade_convidados">{{ __('Quantidade Estimada de Convidados') }}</label>
                                <input type="number" id="quantidade_convidados" name="quantidade_convidados" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="nome_aniversariante">{{ __('Nome Completo do Aniversariante') }}</label>
                                <input type="text" id="nome_aniversariante" name="nome_aniversariante" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="idade_aniversariante">{{ __('Idade a Ser Comemorada') }}</label>
                                <input type="number" id="idade_aniversariante" name="idade_aniversariante" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Solicitação de Reserva') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
