@if(Session::has('message'))
<div class="card-panel green lighten-4">
        <div class="card-content"><h8 class="light center green-text"><em> {!! session('message') !!}</em></h5>
    </div>
</div>
@endif