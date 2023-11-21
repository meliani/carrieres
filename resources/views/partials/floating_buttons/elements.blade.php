    {{-- <div class="fixed-action-btn">
        <a class="btn-floating btn-large">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul> --}}
    <li><a class="btn-floating tooltipped" data-position="left" data-tooltip="Liste des stages Actifs"
            href="{{ url('/~/internships') }}">
            <i class="material-icons">list</i></a></li>
    <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Exporter les donnees"
            href="{{ url('/extractions') }}">
            <i class="material-icons">file_download</i></a></li>
    <li><a class="btn-floating green" href="{{ url('/myOffers') }}"><i class="material-icons">work</i></a></li>
    {{-- </ul>
    </div> --}}
