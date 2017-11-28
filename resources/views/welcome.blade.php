@extends('layouts.ui')

@section('content')
<div class="container">
    <div class="card-panel">
        <div class="card-title"><h5>Login</h5></div>
        <hr>
        <div class="card-content">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="input-field col s6 m6">
                    <i class = "material-icons prefix">account_circle</i>
                    {{ $errors->has('email') ? ' has-error' : '' }}
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="active validate" required name="email" value="{{ old('email') }}" autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s6 m6">
                    <i class = "material-icons prefix">lock_outline</i>

                {{ $errors->has('password') ? ' has-error' : '' }}
                    <label for="password">Password</label>
                    <input id="password" type="password" class="validate" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                    <div class="input-field col s6 m12">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember">Remember Me</label>
                    </div>

                <div class="card-action">
                    <div class="input-field col s6 m6">
                        <button type="submit" class="btn waves-effect waves-light">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
