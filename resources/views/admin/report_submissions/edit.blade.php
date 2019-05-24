@extends('layouts.ui.app')

@section('content')
    <section class="content-header">
        <h1>
            Report Submission
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reportSubmission, ['route' => ['admin.reportSubmissions.update', $reportSubmission->id], 'method' => 'patch']) !!}

                        @include('admin.report_submissions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection