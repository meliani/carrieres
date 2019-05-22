@extends('layouts.ui.app')

@section('content')
<div class="card-panel">
    <div class="row">
        @if ($errors->has('email'))
        <div class="card-panel scale-transition scale-in">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
        @endif
        <div class="col m8">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Redéfinition de mot de passe</h4></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Addresse email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Générer le lien
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
