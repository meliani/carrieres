<div class="row">
    <div class="col s12">
        <ul class="collection">
            <li class="collection-item avatar">
                <i class="material-icons circle green">check</i>
                <span class="title">Entreprise : {{ $application->offer->organization_name }}</span>
                <p>Sujet : {{ $application->offer->intitule_sujet }}<br>
                    Descriptif : {{ $application->offer->descriptif }}<br>
                    {{ HTML::link($application->file_cv, 'CV') }}<br>
                    {{ HTML::link($application->file_cover_letter, 'Lettre de motivation') }}
                </p>
            </li>
        </ul>
    </div> <!-- /.col -->
</div> <!-- /.row -->
