@extends('layouts.ui.app')

@section('title','| mes documents de stage')

@section('users_buttons')
@include(Button::home_button())
@endsection

@section('content')
<div class="container">
    <div class="row center">
        <h4 class="header light center blue-text text-lighten-1">liste des documents</h4>
    </div>

    <ul class="collection">
        <li class="collection-item avatar">
            @if(isset($documents))
            <i class="material-icons circle blue">folder</i>
            <span class="title">Conventions</span>
            <a href="#" class="secondary-content"><i class="material-icons">grade</i></a>
            @foreach ($documents as $doc)
            <p>
                <a href="{{ $doc->getUrl() }}">
                    {{ $doc->name }}

                </a>
            </p>
            @endforeach
            @endif
        </li>

    </ul>
</div>

@endsection