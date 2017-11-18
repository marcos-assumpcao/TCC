@extends('layouts.dashboard')

@section('content')

<h1>Nova Ordem de Serviço <!--<a href="#" type="button" class="btn btn-success float-right">Salvar</a>--></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('orderservices.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                <label for="user_id" class="col-md-4 control-label">Cliente</label>

                <div class="col-md-6">

                    <select name="user_id" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('user_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('contato') ? ' has-error' : '' }}">
                <label for="contato" class="col-md-4 control-label">Contato</label>

                <div class="col-md-6">
                    <input id="contato" type="text" class="form-control" name="contato" required>

                    @if ($errors->has('contato'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contato') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('equipamento') ? ' has-error' : '' }}">
                <label for="contato" class="col-md-4 control-label">Equipamento</label>

                <div class="col-md-6">
                    <input id="equipamento" type="text" class="form-control" name="equipamento" required>

                    @if ($errors->has('equipamento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('equipamento') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('marca') ? ' has-error' : '' }}">
                <label for="marca" class="col-md-4 control-label">Marca</label>

                <div class="col-md-6">
                    <input id="marca" type="text" class="form-control" name="marca" required>

                    @if ($errors->has('marca'))
                    <span class="help-block">
                        <strong>{{ $errors->first('marca') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('defeito') ? ' has-error' : '' }}">
                <label for="defeito" class="col-md-4 control-label">Defeito</label>

                <div class="col-md-6">
                    <input id="defeito" type="text" class="form-control" name="defeito" required>

                    @if ($errors->has('defeito'))
                    <span class="help-block">
                        <strong>{{ $errors->first('defeito') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('serie') ? ' has-error' : '' }}">
                <label for="serie" class="col-md-4 control-label">Número de Série</label>

                <div class="col-md-6">
                    <input id="serie" type="text" class="form-control" name="serie" required>

                    @if ($errors->has('serie'))
                    <span class="help-block">
                        <strong>{{ $errors->first('serie') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
                <label for="modelo" class="col-md-4 control-label">Modelo</label>

                <div class="col-md-6">
                    <input id="modelo" type="text" class="form-control" name="modelo" required>

                    @if ($errors->has('modelo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('modelo') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tensao') ? ' has-error' : '' }}">
                <label for="tensao" class="col-md-4 control-label">Tensão</label>

                <div class="col-md-6">
                    <input id="tensao" type="text" class="form-control" name="tensao" required>

                    @if ($errors->has('tensao'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tensao') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cor') ? ' has-error' : '' }}">
                <label for="cor" class="col-md-4 control-label">Cor</label>

                <div class="col-md-6">
                    <input id="cor" type="text" class="form-control" name="cor" required>

                    @if ($errors->has('cor'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cor') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('ano') ? ' has-error' : '' }}">
                <label for="ano" class="col-md-4 control-label">Ano</label>

                <div class="col-md-6">
                    <input id="ano" type="text" class="form-control" name="ano" required>

                    @if ($errors->has('ano'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ano') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('patrimonio') ? ' has-error' : '' }}">
                <label for="patrimonio" class="col-md-4 control-label">Patrimonio</label>

                <div class="col-md-6">
                    <input id="patrimonio" type="text" class="form-control" name="patrimonio" required>

                    @if ($errors->has('patrimonio'))
                    <span class="help-block">
                        <strong>{{ $errors->first('patrimonio') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('chamado') ? ' has-error' : '' }}">
                <label for="chamado" class="col-md-4 control-label">Chamado</label>

                <div class="col-md-6">
                    <input id="chamado" type="text" class="form-control" name="chamado" required>

                    @if ($errors->has('chamado'))
                    <span class="help-block">
                        <strong>{{ $errors->first('chamado') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
