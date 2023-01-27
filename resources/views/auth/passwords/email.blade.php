@extends('layouts.ui.app')

@section('content')
	<div class="container">
		<div class="container col s12 m5 l5">
			@if ($errors->has('email'))
				<div class="card-panel scale-transition scale-in">
					<strong>{{ $errors->first('email') }}</strong>
				</div>
			@endif
			<div class="card-panel grey lighten-5 z-depth-1">
				<div class="card-title">
					<div class="header col s12 light center blue-text text-lighten-1">
						<h5>{{__('Reset password')}}</h5>
					</div>
				</div>

				<div class="card-content">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
						{{ csrf_field() }}

						{{ Form::textGroup(
						    [
						        'name' => 'email',
						        'value',
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

						<div class="card-action">
							<div class="col-md-6 col-md-offset-4">
								<button class="btn btn-primary" type="submit">
									{{__('Send reset link')}}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
