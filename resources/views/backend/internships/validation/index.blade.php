@extends('layouts.ui.app')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  

@section('content')

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">{{ __('Projects list') }}</h4>
        </div>
    @if($trainees instanceof \Illuminate\Pagination\LengthAwarePaginator )
    <div class="center">
        {{ $trainees->links('vendor.pagination.default') }}
    </div>
    @endif

    {!! Form::open(['method'=>'GET','url'=>'Sign',
    'class'=>'navbar-form navbar-left','role'=>'search'])  !!}

        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="s" placeholder="Chercher par Etudiant ou par Id...">
        </div>
    {!! Form::close() !!}

    @include('backend.internships.validation.list')


    @if($trainees instanceof \Illuminate\Pagination\LengthAwarePaginator )
    <div class="center">
        {{ $trainees->links('vendor.pagination.default') }}
    </div>
    @endif
@endsection
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
