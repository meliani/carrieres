@extends('layouts.ui.app')
@section('title')| Planning des soutenances @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                {{ $title }}
            </h3>
        </div>
        @include ('errors.list')
        <div class="iframe" style="width:100%; height:100%;" >
        {!! $iframe !!}
        </div>
        </div>
    </div>
</div>
@endsection