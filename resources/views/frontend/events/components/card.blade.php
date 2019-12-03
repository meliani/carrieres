<div class="col s6 m3 l3">
    <h6 class="center-align"></h6>
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light center-align">
            <img class="activator" src="https://materializecss.com/images/office.jpg">        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
            {{ $event->title }}
            <i class="material-icons right">more_vert</i></span>
            {{ Form::open(['route'=>['events.update',
            $event->id],
            'id' => 'form-'.$event->id,
            'method'=>'patch']) }}
            <p><a href="#" onclick="document.getElementById('form-{{ $event->id }}').submit();">Oui je participe </a>
            {!! Form::close() !!}
            <form id="form-2">
            <a class="right" href="#" onclick="document.getElementById('form-2').submit();"> Non</a></p>
            </form>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
            Détails sur l'événement<i class="material-icons right">close</i></span>
        <p> {{ $event->detail }}</p>
        <p>le {{ $event->date->format('d/m/Y') }} à {{ $event->hour }}</p>
        </div>
    </div>
</div>
