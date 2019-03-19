@include('partials.cards.welcome')
@if(!$person->active())
@include('partials.cards.profile')

@endif
@if($person->ine=2)
@include('partials.cards.stage')
@endif