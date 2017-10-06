@extends('layouts.dashboard')

@section('content')

<h1>Novo Usuário <!--<a href="#" type="button" class="btn btn-success float-right">Salvar</a>--></h1>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                    <input id="fantasia" type="text" class="form-control" name="fantasia" value="{{ old('fantasia') }}" required autofocus>

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
                    <input id="aniversario" type="text" class="form-control" name="aniversario" value="{{ old('aniversario') }}" required autofocus>

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
                    <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required autofocus>

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
                    <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required autofocus>

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
                    <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>

                    @if ($errors->has('cidade'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cidade') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                <label for="endereco" class="col-md-4 control-label">Endereço</label>

                <div class="col-md-6">
                    <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required autofocus>

                    @if ($errors->has('endereco'))
                    <span class="help-block">
                        <strong>{{ $errors->first('endereco') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Endereço de E-Mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
