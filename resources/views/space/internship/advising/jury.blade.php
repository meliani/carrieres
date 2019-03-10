{!! isset($trainee->adviser->exami1) ? '<p>'.$trainee->adviser->exami1->name.'</p>':'' !!}
{!! isset($trainee->adviser->exami2) ? '<p>'.$trainee->adviser->exami2->name.'</p>':'' !!}
{!! isset($trainee->adviser->exami3) ? '<p>'.$trainee->adviser->exami3->name.'</p>':'' !!}
<a href={{ route('Jury.create', ['pfe_id' => $trainee->id,'advisor' => '3']) }}>
<i class="tiny material-icons">add</i>