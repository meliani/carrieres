{!! isset($trainee->internship->adviser->exami1) ? '<p>'.$trainee->internship->adviser->exami1->name.'</p>':'' !!}
{!! isset($trainee->internship->adviser->exami2) ? '<p>'.$trainee->internship->adviser->exami2->name.'</p>':'' !!}
{!! isset($trainee->internship->adviser->exami3) ? '<p>'.$trainee->internship->adviser->exami3->name.'</p>':'' !!}
<a href={{ route('Jury.create', ['pfe_id' => $trainee->internship['id'],'advisor' => '3']) }}>
<i class="tiny material-icons">add</i>