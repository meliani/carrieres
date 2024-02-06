@extends('layouts.ui.app')

@section('title', '| mes documents de stage')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')
    <div class="container">
        <div class="row center">
            <h4 class="header light center blue-text text-lighten-1">Générer la convention de stage</h4>
        </div>

        <ul class="collection">
            <li class="collection-item avatar">
                @if (isset($documents))
                    <i class="material-icons circle blue">folder</i>
                    <span class="title">Mes documents de stage</span>
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
            @if (user()->student->level == 'ThirdYear')
                @if (user()->student->is_mobility != 1)
                    @includeWhen(user()->student->internship->country != 'France',
                        'frontend.documents.partials.buttons.global')
                    @includeWhen(user()->student->internship->country == 'France',
                        'frontend.documents.partials.buttons.france')
                @elseif(user()->student->is_mobility == 1)
                    @includeWhen(user()->student->internship->country != 'France',
                        'frontend.documents.partials.buttons.mobility')
                    @includeWhen(user()->student->internship->country == 'France',
                        'frontend.documents.partials.buttons.mobility_france')
                @endif
            @else
                @include('frontend.documents.partials.buttons.global')
            @endif


            {{-- @include('frontend.documents.partials.collections.lr') --}}

        </ul>
    </div>

@endsection
