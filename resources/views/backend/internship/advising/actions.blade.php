<!-- Dropdown Trigger -->
<a class='dropdown-trigger flat icon' href='#' data-target='row_menu'>
<i class="material-icons">menu</i></a>

<!-- Dropdown Structure -->
<ul id='row_menu' class='dropdown-content'>
    <li><a href="#!"><i class="material-icons">content_copy</i></a></li>
    <li><a href="#!"><i class="material-icons">mode_edit</i></a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!"><i class="material-icons">mode_edit</i>binome</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!"><i class="material-icons">delete</i></a></li>
</ul>

{{ route('Project.create', 
['pfe_id' => $trainee->internship['id'],
'advisor' => '2' ]) }}