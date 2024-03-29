<div class="card hoverable">
    <div class="card-content">
        <ul class="collapsible">
            <li class="active">
                <div class="collapsible-header">
                    <h5 class='header5 blue-grey-text textlighten-5'>
                        <i class="small material-icons blue-grey-text textlighten-5">account_circle</i>
                        Bonjour <b>{!! user()->person->full_name !!}</b>
                    </h5>
                </div>
                <div class="collapsible-body ">

                    <h6 class='header5 blue-grey-text textlighten-5'>
                        <p>Vous êtes en

                            <b>{{ trans_choice('labels.profile.years', user()->person->level) }}</b>, filière
                            <b>{{ user()->person->program }}</b>
                            @if (user()->person->is_mobility)
                                @lang('newlife.profile.mobility')
                            @endif

                        </p>
                    </h6>

                    <p class='header5 blue-grey-text'>
                        @lang('newlife.profile.welcome')
                    </p>

                    </p>
                </div>
            </li>
        </ul>

    </div>
</div>
