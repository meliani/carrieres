@extends('layouts.ui')

@section('content')                

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container home">
    <div class="row">
        @include('partials.cards',$person)
    </div>
</div>
@endsection
