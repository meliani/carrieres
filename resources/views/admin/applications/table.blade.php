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
            <th>Date de candidature</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
            <tr>
                <td>{{ $application->organization_name }}</td>
                <td>{{ $application->intitule_sujet }}</td>
                <td>{{ $application->name }}</td>
                <td>{{ $application->options }}</td>
                <td>{{ $application->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Raison sociale</th>
            <th>intitulé de sujet</th>
            <th>Nom et prenom</th>
            <th>Filiere</th>
            <th>Date de candidature</th>
        </tr>
    </tfoot>
</table>

@section('scripts')
    @include('layouts.datatables_js')
    <script>
        $(function() {
            $('#example1').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true
            })
        })
    </script>
@endsection
