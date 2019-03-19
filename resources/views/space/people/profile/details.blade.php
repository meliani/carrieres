<div class="card hoverable">
    <div class="card-content">
        <ul class="collapsible">
            <li class="active">
                <div class="collapsible-header">
                    <h5 class='header5 blue-grey-text textlighten-5'>
                        <i class="small material-icons blue-grey-text textlighten-5">account_circle</i>
                        Détails et coordonées
                    </h5>
                </div>
                <div class="collapsible-body">
                    <p> Nom complet :
                        {!! $person->name !!}
                    </p>
                <p>INE {{ $person->ine }}, Année scolaire {{ $person->scholar_year }}</p>
                
                </div>
            </li>
        </ul>
    </div>
</div>