@extends('layouts.dashboard')

@section('content')

<h1>Editar Ordem de Serviço: {{ $orderservice->id }}<!--<a href="#" type="button" class="btn btn-success float-right">Salvar</a>--></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('orderservices.update', $orderservice['id'] ) }}">
            <input name="_method" type="hidden" value="PUT">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                <label for="user_id" class="col-md-4 control-label">Cliente</label>

                <div class="col-md-6">

                    <select name="user_id" disabled="disabled" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" 

                                @if($user->id == $orderservice['user_id'])
                                selected="" 
                                @endif

                                >{{ $user->name }}</option>
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
                    <input id="contato" type="text" class="form-control" name="contato" value="{{ ($orderservice['contato']) }}" required autofocus>

                    @if ($errors->has('contato'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contato') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('equipamento') ? ' has-error' : '' }}">
                <label for="equipamento" class="col-md-4 control-label">Equipamento</label>

                <div class="col-md-6">
                    <input id="equipamento" type="text" class="form-control" name="equipamento" value="{{ ($orderservice['equipamento']) }}" required autofocus>

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
                    <input id="marca" type="text" class="form-control" name="marca" value="{{ ($orderservice['marca']) }}" required autofocus>

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
                    <input id="defeito" type="text" class="form-control" name="defeito" value="{{ ($orderservice['defeito']) }}" required autofocus>

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
                    <input id="serie" type="text" class="form-control" name="serie" value="{{ ($orderservice['serie']) }}" required autofocus>

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
                    <input id="modelo" type="text" class="form-control" name="modelo" value="{{ ($orderservice['modelo']) }}" required autofocus>

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
                    <input id="tensao" type="text" class="form-control" name="tensao" value="{{ ($orderservice['tensao']) }}" required autofocus>

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
                    <input id="cor" type="text" class="form-control" name="cor" value="{{ ($orderservice['cor']) }}" required autofocus>

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
                    <input id="ano" type="text" class="form-control" name="ano" value="{{ ($orderservice['ano']) }}" required autofocus>

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
                    <input id="patrimonio" type="text" class="form-control" name="patrimonio" value="{{ ($orderservice['patrimonio']) }}" required autofocus>

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
                    <input id="chamado" type="text" class="form-control" name="chamado" value="{{ ($orderservice['chamado']) }}" required autofocus>

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
