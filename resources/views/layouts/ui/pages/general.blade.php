{{--
    Params:
    headTitle,pageTitle:String
    withPagination,withSearchBox,withFloatingButtons:boolean
    collection:PagintionAware Collection
     --}}

@extends('layouts.ui.app')

@section('title', $headTitle)

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  


@section('content')
{{-- Title bloc --}}
@include('components.section_title',['title' => $pageTitle])

@includeWhen($withPagination ?? null, 'components.pagination.pagination_wrapper', ['collection' => $collection ?? null])
@includeWhen($withSearchBox ?? null, 'components.search_box', ['some' => 'data'])

@yield('data')

{{-- @includeWhen($withPagination, 'components.pagination.pagination_wrapper', ['collection' => $collection]) --}}
@endsection

@if($withFloatingButtons ?? null)
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
@endif