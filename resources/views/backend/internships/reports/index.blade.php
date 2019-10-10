@extends('layouts.ui.app')

@section('users_buttons')
    @include(Button::user_buttons())
@endsection  

@section('content')

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">Soumission de stages</h4>
        </div>
    @if($students instanceof \Illuminate\Pagination\LengthAwarePaginator )
    <div class="center">
        {{ $students->links('vendor.pagination.default') }}
    </div>
    @endif

    @include('backend.internships.reports.partials.list')


    @if($students instanceof \Illuminate\Pagination\LengthAwarePaginator )
    <div class="center">
        {{ $students->links('vendor.pagination.default') }}
    </div>
    @endif
@endsection
@section('floating-buttons')
    @include(Button::page_action_buttons())
@endsection
