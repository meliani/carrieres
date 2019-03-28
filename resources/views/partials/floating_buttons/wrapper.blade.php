$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        @include('partials.floating_buttons.elements')
    </ul>
</div>

@section('scripts')
    @include('partials.floating_buttons.script')
@stop