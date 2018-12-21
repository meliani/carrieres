@extends('layouts.ui')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    

                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
