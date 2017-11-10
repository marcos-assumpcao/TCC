@extends('layouts.dashboard')

@section('content')

<h1>Editar Orçamento da Ordem de Serviço: {{ $orcamento->orderservices }} <!--<a href="#" type="button" class="btn btn-success float-right">Salvar</a>--></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('orderservices.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('orderservices') ? ' has-error' : '' }}">
                <label for="orderservices" class="col-md-4 control-label">Ordem de Serviço</label>

                <div class="col-md-6">
                    <input id="orderservices" type="text" class="form-control" name="orderservices" value="{{ $orcamento['order_service_id'] }}" required autofocus>

                    @if ($errors->has('orderservices'))
                    <span class="help-block">
                        <strong>{{ $errors->first('orderservices') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                <label for="data" class="col-md-4 control-label">Data Inicial</label>

                <div class="col-md-6">
                    <input id="data" type="text" class="form-control" name="data" value="{{ ($orcamento['data']) }}" required autofocus>

                    @if ($errors->has('data'))
                    <span class="help-block">
                        <strong>{{ $errors->first('data') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('aprovacao') ? ' has-error' : '' }}">
                <label for="aprovacao" class="col-md-4 control-label">Data de Aprovação</label>

                <div class="col-md-6">
                    <input id="aprovacao" type="text" class="form-control" name="aprovacao" value="{{ ($orcamento['aprovacao']) }}" required autofocus>

                    @if ($errors->has('aprovacao'))
                    <span class="help-block">
                        <strong>{{ $errors->first('aprovacao') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('entrega') ? ' has-error' : '' }}">
                <label for="entrega" class="col-md-4 control-label">Data de Entrega</label>

                <div class="col-md-6">
                    <input id="entrega" type="text" class="form-control" name="entrega" value="{{ ($orcamento['entrega']) }}" required autofocus>

                    @if ($errors->has('entrega'))
                    <span class="help-block">
                        <strong>{{ $errors->first('entrega') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('defeito') ? ' has-error' : '' }}">
                <label for="defeito" class="col-md-4 control-label">Defeito</label>

                <div class="col-md-6">
                    <input id="defeito" type="text" class="form-control" name="defeito" value="{{ ($orcamento['defeito']) }}" required autofocus>

                    @if ($errors->has('defeito'))
                    <span class="help-block">
                        <strong>{{ $errors->first('defeito') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('servico') ? ' has-error' : '' }}">
                <label for="servico" class="col-md-4 control-label">Serviço/Peças</label>

                <div class="col-md-6">
                    <input id="servico" type="text" class="form-control" name="servico" value="{{ ($orcamento['servico']) }}" required autofocus>

                    @if ($errors->has('servico'))
                    <span class="help-block">
                        <strong>{{ $errors->first('servico') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
                <label for="preco" class="col-md-4 control-label">Preço</label>

                <div class="col-md-6">
                    <input id="preco" type="text" class="form-control" name="preco" value="{{ ($orcamento['preco']) }}" required autofocus>

                    @if ($errors->has('preco'))
                    <span class="help-block">
                        <strong>{{ $errors->first('preco') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                <label for="total" class="col-md-4 control-label">Preço Total</label>

                <div class="col-md-6">
                    <input id="total" type="text" class="form-control" name="total" value="{{ ($orcamento['total']) }}" required autofocus>

                    @if ($errors->has('total'))
                    <span class="help-block">
                        <strong>{{ $errors->first('total') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
