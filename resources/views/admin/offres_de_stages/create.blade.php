@extends('layouts.ui.app')

@section('content')
    <section class="content-header">
        <h1>
            Offres De Stages
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.offresDeStages.store', 'files' => true]) !!}

                        @include('admin.offres_de_stages.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
