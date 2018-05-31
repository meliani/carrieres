@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
