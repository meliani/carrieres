
@extends('layouts.ui.app')
@section('title')| Demande de stagiaire @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                {{__('Propose a topic for a graduation project')}}
            </h3>
        </div>
        @include ('errors.list')
            @include('frontend.internships.offers.form.fields')
        </div>
    </div>
</div>
@endsection