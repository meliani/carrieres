@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Modifier cette offre
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($offresDeStages, ['route' => ['admin.offresDeStages.update', $offresDeStages->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.offres_de_stages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection