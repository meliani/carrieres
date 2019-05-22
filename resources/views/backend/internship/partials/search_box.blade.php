{!! Form::open(['method'=>'GET','url'=> route(Route::current()->getName()),
'class'=>'navbar-form navbar-left','role'=>'search'])  !!}

    <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="s" placeholder="Chercher par Etudiant ou par Id...">
    </div>
{!! Form::close() !!}