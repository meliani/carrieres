@extends('layouts.ui.app')

@section('content')                

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container home">
    @if(isset($person))
    <div class="row">
        @include('partials.cards.cards',$person)
    </div>
    @endif
</div>
@endsection