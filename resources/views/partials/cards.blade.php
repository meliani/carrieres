@include('partials.cards.welcome')
@if($person->is_active)
@include('partials.cards.profile')
@endif
@if($person->ine=='2')
@include('partials.cards.stage')
@endif