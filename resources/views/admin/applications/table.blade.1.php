@section('css')
    @include('layouts.datatables_css')
@endsection
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Raison sociale</th>
                  <th>intitulé de sujet</th>
                  <th>Nom et prenom</th>
                  <th>Filiere</th>
                  <th>Nom responsable</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applications as $application)
                        <tr>
                        <td>{{ $application->offreDeStage()->pluck('organization_name') }}</td>
                        <td>{{ $application->offreDeStage()->pluck('intitule_sujet') }}</td>
                        <td>{{ $application->user()->pluck('name') }}</td>
                        <td>{{ $application->offreDeStage()->pluck('organization_name') }}</td>
                        <td></td>
                        </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Raison sociale</th>
                  <th>intitulé de sujet</th>
                  <th>Nom et prenom</th>
                  <th>Filiere</th>
                  <th>Nom responsable</th>
                </tr>
                </tfoot>
              </table>

@section('scripts')
    @include('layouts.datatables_js')
    <script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
@endsection