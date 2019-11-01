@if($documents)
<div class="container">
    <ul class="collection">

        @foreach ($documents as $doc)
        @foreach ($doc as $file)
    <li class="collection-item avatar">
            <i class="material-icons circle blue">folder</i>
                <span class="title">          <a href="{{ $file->getUrl() }}">
                        {{ $file->name }}
                      </a></span>
                <a href="#" class="secondary-content"><i class="material-icons">grade</i></a>
        <p>
          <a href="{{ $file->getUrl() }}">
            {{ $file->mime_type }}
          </a>
        </p>
      </li>
        @endforeach
        @endforeach
  
    </ul>
  </div>
  @endif
