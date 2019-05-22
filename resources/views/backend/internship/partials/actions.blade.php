<!-- Dropdown Trigger -->
<a class='dropdown-trigger flat icon' href='#' data-target='row_menu'>
<i class="material-icons">menu</i></a>

<!-- Dropdown Structure -->
<ul id='row_menu' class='dropdown-content'>
    <li><a href="{{ url('internships/clone',$trainee->internship->id) }}">
        <i class="material-icons">content_copy</i>cloner</a></li>
    <li><a href="#!"><i class="material-icons">mode_edit</i>modifier</a></li>
    <li class="divider" tabindex="-1"></li>
    <li>
        <a href="{{ action('Frontend\Internship\BinomeController@create',
        ['internship_id' => $trainee->internship->id]) }}">
        <i class="material-icons">group_add</i>add binome</a></li>
    <li><a href="#!"><i class="material-icons">date_range</i>planifier</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!"><i class="material-icons">delete</i></a>supprimer</li>
</ul>