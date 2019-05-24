@extends('layouts.ui.app')

@section('content')
    <section class="content-header">
        <h1>
            Internships
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($internships, ['route' => ['admin.internships.update', $internships->id], 'method' => 'patch']) !!}

                        @include('admin.internships.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection