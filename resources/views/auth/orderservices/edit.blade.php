@extends('layouts.dashboard')

@section('content')

<h1>Editar Usuário {{ $user->name }}<a href="#" type="button" class="btn btn-success float-right">Salvar</a></h1>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('orderservices.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="cliente" class="col-md-4 control-label">Cliente</label>

                            <div class="col-md-6">
                                <input id="cliente" type="text" class="form-control" name="cliente" value="{{ old('cliente') }}" required autofocus>

                                @if ($errors->has('cliente'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cliente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fantasia') ? ' has-error' : '' }}">
                            <label for="fantasia" class="col-md-4 control-label">Nome Fantasia</label>

                            <div class="col-md-6">
                                <input id="fantasia" type="text" class="form-control" name="fantasia" value="{{ old('fantasia') }}" required>

                                @if ($errors->has('fantasia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fantasia') }}</strong>
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

                        <div class="form-group{{ $errors->has('anexo') ? ' has-error' : '' }}">
                            <label for="anexo" class="col-md-4 control-label">Anexos</label>

                            <div class="col-md-6">
                                <input id="anexo" type="text" class="form-control" name="anexo" required>

                                @if ($errors->has('anexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('observacao') ? ' has-error' : '' }}">
                            <label for="observacao" class="col-md-4 control-label">Observações</label>

                            <div class="col-md-6">
                                <input id="observacao" type="text" class="form-control" name="observacao" required>

                                @if ($errors->has('observacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('observacao') }}</strong>
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
