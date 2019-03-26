<table class="table highlight scale-transition scale-in">
  <thead>
    <tr>
      <th width="13%">Nom et prénom</th>
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
        <td>{{ $professor->name }}</td>
        <td>{{ $professor->adviser1->count() }}</td>
        <td>{{ $professor->adviser2->count() }}</td>
        <td>{{ $professor->examiner1->count() }}</td>
        <td>{{ $professor->examiner2->count() }}</td>
        <td>{{ $professor->examiner3->count() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>