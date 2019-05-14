<div class = "input-field col m2 s4">
  {!! Form::open(['url' => ['Internship/Advising/Stats'], 
  'method' => 'get', 'files' => false]) !!}
  <div class="input-field col s12">
      <i class="material-icons prefix">supervisor_account</i>
      {!! Form::select('department',
      $profs=$professors->unique('department_id')->pluck('department_id','department_id')->all(),
      array('department_id' => 'department_id')
      ) !!}
      {{ Form::label('department', 'Departement') }}
  
  </div>
  
  {!! Form::submit('Envoyer', ['class' => 'btn waves-effect waves-light white-text blue']) !!}
  {!! Form::close() !!}
</div>
<table class="table highlight scale-transition scale-in">
  <thead>
    <tr>
      <th width="3%">Count</th>
      <th width="13%">Nom et prénom</th>
      <th width="13%">Departement</th>
      <th width="13%">Encadrant 1</th>
      <th width="15%">Encadrant 2</th>
        <th width="10%">Examinateur 1</th>
        <th width="10%">Examinateur 2</th>
        <th width="10%">Examinateur 3</th>       
    </tr>
  </thead>
  <tbody>
    @foreach ($professors as $professor)
    <tr>
      <td>{{ $loop->iteration }}</td>
        <td>{{ $professor->name }}</td>
        <td>{{ $professor->department_id }}</td>
        <td>{{ $professor->user->adviser1->count() }}</td>
        <td>{{ $professor->user->adviser2->count() }}</td>
        <td>{{ $professor->user->examiner1->count() }}</td>
        <td>{{ $professor->user->examiner2->count() }}</td>
        <td>{{ $professor->user->examiner3->count() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>