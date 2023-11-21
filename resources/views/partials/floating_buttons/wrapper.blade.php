<div class="fixed-action-btn">
    <a class="btn-floating btn-large">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        @include('partials.floating_buttons.elements')
    </ul>
</div>

@section('page-script')
    @parent
    @include('partials.floating_buttons.script')
@stop