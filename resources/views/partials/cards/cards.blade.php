
<div class="row">

<div class="row center">
@include('partials.cards.welcome')
</div>
<div class="row">
@if(isset($person))
    @if($person->active())
        @include('partials.cards.profile')
    @endif
    @if($person->program_id>0)
        @include('partials.cards.stage')
    @endif
    @include('partials.cards.recommandation')
    @include('partials.cards.declaration')
    @include('partials.cards.convention')
    @include('partials.cards.binome')

@endif

</div>
</div>