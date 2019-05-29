@extends('layouts.ui.app')

@section('title', 'Soutenances')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  


@section('content')
    {{-- Title bloc --}}}
    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">
            <Title>Planing des soutenances</Title>
        </h4>
    </div>

    @include('components.pagination.pagination_wrapper',$paginate=$collection)
    @include('components.search_box')
    @include('backend.internships.defenses.table_wrapper')


    @include('components.pagination.pagination_wrapper',$paginate=$collection)
@endsection

@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection

