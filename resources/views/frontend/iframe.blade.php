@extends('layouts.ui.app')
@section('title')| {{ $title }} @endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col s12 m12">
        <div class="section">
            <h3 class="header light center blue-text text-lighten-1">
                {{ $title }}
            </h3>
        </div>
        <div class="row">
            <div class="col s6 offset-s6 flow-text"><a href="v23/calendrier">Essayez le nouveau calendrier</a> <a href="v23/calendrier" class="btn-floating btn-large pulse"><i class="material-icons">insert_invitation</i></a></div>
          </div>
        @include ('errors.list')
        <div class="iframe" style="width:100%; height:500px;" >
        {!! $iframe !!}
        </div>
        </div>
    </div>
</div>
@endsection