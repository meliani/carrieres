@extends('layouts.ui.app')

@section('title', 'This is my title')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  


@section('content')
{{-- Title bloc --}}}
<div class="row center">
    <h4 class="header light center blue-text text-lighten-1">
        <Title>title</Title>
    </h4>
</div>
@include('components.pagination.pagination_wrapper',$paginate=$internships)

@include('components.search_box')


@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection

