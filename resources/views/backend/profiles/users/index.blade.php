@extends('layouts.ui.app')

@section('title', '| Users')

@section('content')

<div class="container col s12 m12">
    <h1><i class="fa fa-users"></i>Administration des membres<a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
    
    <div class="card col s12 m12">
            <div class="card-header center col m10 s10">
              <h3 class="card-title">Liste des utilisateurs</h3>

              <div class="card-tools">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                    <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn fa fa-edit btn-info pull-left" style="margin-right: 3px;"></a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('X', ['class' => 'btn fa fa-remove btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    {{-- Html::paginator([$paginate=$users]) --}}
    @include('components.pagination.pagination_wrapper',$paginate=$users)
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

</div>

@endsection