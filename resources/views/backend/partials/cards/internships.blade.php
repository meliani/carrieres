<div class="col s12 m4 l4">
    <h6 class="center-align">Stages</h6>
    <div class="card">
        <div class="card-content waves-effect waves-block waves-light center-align">
            <i class="material-icons large activator circle">nature_people</i>
        </div>
        <div class="card-content">
        <span class="card-title activator">
            {{ $count['internships'] }} Stages concrétisés
            <i class="material-icons right">more_vert</i></span>
        <p><a href={{ url('~/internships') }}>Voir la liste</a></p>
        </div>
        <div class="card-reveal">
        <span class="card-title">
            Scoop stages<i class="material-icons right">close</i></span>
            <p>{{ $count['internships.ine3'] }} Etudiants en INE3 sans stage.</p>
            <p>{{ $count['internships.mobility'] }} en mobilite sans stage.</p>
        </div>
    </div>
</div>
