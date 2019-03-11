{!! Form::open(['route' => ['admin.offresDeStages.destroy', $id], 'method' => 'delete']) !!}

<div class='btn-group'>

    <a href="{{ route('admin.offresDeStages.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('admin.offresDeStages.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}    
  {!! Form::close() !!}    
{!! Form::open(['route' => ['admin.offresDeStages.activate', $id], 'method' => 'post']) !!}
{!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>', [
        'type' => 'submit',
        'value' => 'activate',
        'class' => 'btn btn-success btn-xs'
    ]) 
    
    !!}
  
{!! Form::close() !!}



</div>

