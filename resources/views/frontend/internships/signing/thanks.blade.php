@extends('layouts.ui.app')

@section('css')

@endsection

@section('content')
<div class="row center">
<h4 class="header light center blue-text text-lighten-1"><i class="large material-icons">supervisor_account</i></h4>
</div>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel lighten-4">
                <div class="row">
                    <div class="col s12">
                        <h4>Ce Document a été bien signé par : {{ user()->name }}</h4>
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="card-action">
                        <a href="{!! route('Sign.index') !!}" class="waves-effect blue text-white waves btn">Retour a la liste des PFE</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

<script>

</script>
@endsection