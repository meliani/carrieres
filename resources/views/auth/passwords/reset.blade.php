@extends('layouts.ui.app')

@section('content')
	<div class="container">
		<div class="row">

			<div class="container">
				<div class="card-title">
					<div class="header col s12 light center blue-text text-lighten-1">
						<h5>{{ __('Your new access credentials') }}</h5>
					</div>
				</div>
				<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
					{{ csrf_field() }}

					<input name="token" type="hidden" value="{{ $token }}">

					{{ Form::textGroup(
					    [
					        'name' => 'email',
					        'value' => $email,
					        'label' => __('Email adress'),
					        'placeholder',
					        'class' => 'materialize-textarea validate',
					        'icon' => 'email',
					        'helper',
					        'required' => 'required',
					        'cols' => 6,
					        'type' => 'email',
					    ],
					    $errors,
					) }}

					{{ Form::textGroup(
					    [
					        'name' => 'password',
					        'value',
					        'label' => __('Password'),
					        'placeholder',
					        'class' => 'materialize-textarea validate',
					        'icon' => 'lock_outline',
					        'helper',
					        'required' => 'required',
					        'cols' => 6,
					        'type' => 'password',
					    ],
					    $errors,
					) }}

					{{ Form::textGroup(
					    [
					        'name' => 'password_confirmation',
					        'value',
					        'label' => __('Password confirmation'),
					        'placeholder',
					        'class' => 'materialize-textarea validate',
					        'icon' => 'lock_outline',
					        'helper',
					        'required' => 'required',
					        'cols' => 6,
					        'type' => 'password',
					    ],
					    $errors,
					) }}

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button class="btn btn-primary" type="submit">
								{{ __('Reset password') }}
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
