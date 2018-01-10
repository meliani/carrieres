@section('css')
    @include('layouts.datatables_css')
@endsection
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Raison sociale</th>
                  <th>intitulé de sujet</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applications as $application)
                
                    @foreach($application->offresDeStages as $offer )
                    
                        <tr>
                        <td>{{ $offer->raison_sociale }}</td>
                        <td>{{ $offer->intitule_sujet }}
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Raison sociale</th>
                  <th>intitulé de sujet</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>

@section('scripts')
    @include('layouts.datatables_js')
    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection