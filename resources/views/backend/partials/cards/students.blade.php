<div class="col s12 m4 l4">
    <h6 class="center-align">Etudiants</h6>
    <div class="card">
        <div class="card-content waves-effect waves-block waves-light center-align">
            <i class="material-icons large activator circle white-text blue">mood_bad</i>
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
            {{ $count['students'] }} Etudiants inscrits.
            <i class="material-icons right">more_vert</i></span>
        <p><a href="#">Voir la liste</a></p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
            Scoop students<i class="material-icons right">close</i></span>
        <p>{{ $count['students.actual'] }} Etudiants inscrits cette annee.</p>
        <p>{{ $count['students.ine3'] }} en INE 3.</p>
        <p>{{ $count['students.ine2'] }} en INE 2.</p>
        <p>{{ $count['students.ine1'] }} en INE 1.</p>

        </div>
    </div>
</div>
