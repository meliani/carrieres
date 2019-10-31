@extends('layouts.ui.app')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection
@section('content')
    {{ Form::model($report,['route'=>['backend.reports.update',$report],'method' => 'PUT']) }}

    @include('backend.internships.reports.partials.edit')
    {!! Form::close() !!}

@endsection