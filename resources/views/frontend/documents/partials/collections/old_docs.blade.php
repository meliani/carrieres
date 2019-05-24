    @if(isset($documents))
    <ul class="collection">
    <li class="collection-item avatar">
    <i class="material-icons circle blue">folder</i>
    <span class="title">Versions precedentes des documents</span>
    <a href="#" class="secondary-content"><i class="material-icons">grade</i></a>
    @foreach ($documents as $doc)
    <p>
        <a href="{{ $doc->getUrl() }}">
        {{ $doc->name }}
        </a>
    </p>
    @endforeach
    </li><li class="collection-item avatar">
    <a href={{ url('students/myDocuments?action[]=render&action[]=delete') }} class="waves-effect waves-light btn red">
        <i class="material-icons right">delete</i>Supprimer tout</a></li>
    </ul>
    @endif
