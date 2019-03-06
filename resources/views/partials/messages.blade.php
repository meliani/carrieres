@if(Session::has('message'))
<div class="container materialert {{ Session::get('alert-class', '') }}">
    <i class="material-icons">check_circle</i> <span>{!! session('message') !!}</span>
    <button type="button" class="close-alert">×</button>
</div>
@endif