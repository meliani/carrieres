<!-- Dropdown Trigger -->
<a class='dropdown-trigger flat icon' href='#' data-target='row_menu{{$internship->id}}'>
<i class="material-icons">menu</i></a>

<!-- Dropdown Structure -->
<ul id='row_menu{{$internship->id}}' class='dropdown-content'>
{{--     <li><a href="{{ url('-/internships/clone',[$internship->id,$internship->user_id]) }}">
        <i class="material-icons">content_copy</i>cloner</a></li> --}}
    <li><a href="{{ route('backend.internships.edit',$internship->id) }}">
        <i class="material-icons">mode_edit</i>modifier</a></li>
    <li class="divider" tabindex="-1"></li>
{{--     <li>
        <a href="{{ action('Backend\Internship\BinomeController@create',
        ['internship_id' => $internship->id]) }}">
        <i class="material-icons">group_add</i>binome</a></li> --}}
    <li><a href="#!"><i class="material-icons">date_range</i>planifier</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!"><i class="material-icons">delete</i>supprimer</a></li>
</ul>