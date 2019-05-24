@extends('layouts.ui.app')

@section('content')
    <section class="content-header">
        <h1>
            Soumission de rapport de stage
        </h1>
        <h4>
                La version numérique doit être transmise avant le Mercredi 31 Octobre 2018 à 23:59
        </h4>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'reportSubmissions.store', 'files' => true]) !!}

                        @include('report_submissions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
