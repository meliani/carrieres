@extends('layouts.ui.app')
@section('title')| Déclarer mon stage @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                Mon stage
            </h3>
        </div>
        @include ('errors.list')

        </div>
    </div>
</div>
@endsection