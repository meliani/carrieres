    @if(isset($documents))
    <li class="collection-item avatar">
    <i class="material-icons circle blue">folder</i>
    <span class="title">Anciennes versions de documents</span>
    <a href="#" class="secondary-content"><i class="material-icons">grade</i></a>
    @foreach ($documents as $doc)
    <p>
        <a href="{{ $doc->getUrl() }}">
        {{ $doc->name }}
        </a>
    </p>
    @endforeach
    </li>
    @endif
