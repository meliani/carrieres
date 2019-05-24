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
                        {!! user('name') !!}
                    </p>
                <p>INE {{ user('people.ine') }}, Année scolaire {{ user('people.scholar_year') }}</p>
                </div>
            </li>
        </ul>
        
    </div>
</div>

<div class="card hoverable">
        <div class="card-content">
            <ul class="collapsible">
                <li class="active">
                    <div class="collapsible-header">
                        <h5 class='header5 blue-grey-text textlighten-5'>
                            <i class="small material-icons blue-grey-text textlighten-5">account_circle</i>
                            @lang('newlife.update_my_data')
                        </h5>
                    </div>
                    <div class="collapsible-body">
                            @include('frontend.profile.person.cards.profile_form')
                    </div>
                </li>
            </ul>
            
        </div>
    </div>