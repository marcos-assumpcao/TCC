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
