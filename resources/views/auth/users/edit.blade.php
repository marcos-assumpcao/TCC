@extends('layouts.dashboard')

@section('content')

<h1>Editar Usuário {{ $user->name }}<!--<a href="#" type="button" class="btn btn-success float-right">Salvar</a>--></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('users.update', $user['id'] ) }}">
            <input name="_method" type="hidden" value="PUT">
            {{ csrf_field() }}
            
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ ($user['name']) }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('fantasia') ? ' has-error' : '' }}">
                <label for="fantasia" class="col-md-4 control-label">Nome Fantasia</label>

                <div class="col-md-6">
                    <input id="fantasia" type="text" class="form-control" name="fantasia" value="{{ ($user['fantasia']) }}" required autofocus>

                    @if ($errors->has('fantasia'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fantasia') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('aniversario') ? ' has-error' : '' }}">
                <label for="aniversario" class="col-md-4 control-label">Aniversario</label>

                <div class="col-md-6">
                    <input id="aniversario" type="text" class="form-control" name="aniversario" value="{{ ($user['aniversario']) }}" required autofocus>

                    @if ($errors->has('aniversario'))
                    <span class="help-block">
                        <strong>{{ $errors->first('aniversario') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                <label for="endereco" class="col-md-4 control-label">Endereço</label>

                <div class="col-md-6">
                    <input id="endereco" type="text" class="form-control" name="endereco" value="{{ ($user['endereco']) }}" required autofocus>

                    @if ($errors->has('endereco'))
                    <span class="help-block">
                        <strong>{{ $errors->first('endereco') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                <label for="bairro" class="col-md-4 control-label">Bairro</label>

                <div class="col-md-6">
                    <input id="bairro" type="text" class="form-control" name="bairro" value="{{ ($user['bairro']) }}" required autofocus>

                    @if ($errors->has('bairro'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bairro') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                <label for="cidade" class="col-md-4 control-label">Cidade</label>

                <div class="col-md-6">
                    <input id="cidade" type="text" class="form-control" name="cidade" value="{{ ($user['cidade']) }}" required autofocus>

                    @if ($errors->has('cidade'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cidade') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                <label for="estado" class="col-md-4 control-label">Estado</label>

                <div class="col-md-6">
                    <input id="estado" type="text" class="form-control" name="estado" value="{{ ($user['estado']) }}" required autofocus>

                    @if ($errors->has('estado'))
                    <span class="help-block">
                        <strong>{{ $errors->first('estado') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                <label for="cep" class="col-md-4 control-label">CEP</label>

                <div class="col-md-6">
                    <input id="cep" type="text" class="form-control" name="cep" value="{{ ($user['cep']) }}" required autofocus>

                    @if ($errors->has('cep'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cep') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('site') ? ' has-error' : '' }}">
                <label for="site" class="col-md-4 control-label">Site</label>

                <div class="col-md-6">
                    <input id="site" type="text" class="form-control" name="site" value="{{ ($user['site']) }}" required autofocus>

                    @if ($errors->has('site'))
                    <span class="help-block">
                        <strong>{{ $errors->first('site') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('insc_estadual') ? ' has-error' : '' }}">
                <label for="insc_estadual" class="col-md-4 control-label">Inscrição Estadual</label>

                <div class="col-md-6">
                    <input id="insc_estadual" type="text" class="form-control" name="insc_estadual" value="{{ ($user['insc_estadual']) }}" required autofocus>

                    @if ($errors->has('insc_estadual'))
                    <span class="help-block">
                        <strong>{{ $errors->first('insc_estadual') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cpf_cnpj') ? ' has-error' : '' }}">
                <label for="cpf_cnpj" class="col-md-4 control-label">CPF/CNPJ</label>

                <div class="col-md-6">
                    <input id="cpf_cnpj" type="text" class="form-control" name="cpf_cnpj" value="{{ ($user['cpf_cnpj']) }}" required autofocus>

                    @if ($errors->has('cpf_cnpj'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cpf_cnpj') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                <label for="estado" class="col-md-4 control-label">Telefone</label>

                <div class="col-md-6">
                    <input id="telefone" type="text" class="form-control" name="telefone" value="{{ ($user['telefone']) }}" required autofocus>

                    @if ($errors->has('telefone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telefone') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                <label for="celular" class="col-md-4 control-label">Celular</label>

                <div class="col-md-6">
                    <input id="celular" type="text" class="form-control" name="celular" value="{{ ($user['celular']) }}" required autofocus>

                    @if ($errors->has('celular'))
                    <span class="help-block">
                        <strong>{{ $errors->first('celular') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                <label for="fax" class="col-md-4 control-label">Fax</label>

                <div class="col-md-6">
                    <input id="fax" type="text" class="form-control" name="fax" value="{{ ($user['fax']) }}" required autofocus>

                    @if ($errors->has('fax'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fax') }}</strong>
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
