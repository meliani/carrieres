{!! isset($pfe->adviser->exami1) ? '<p>'.$pfe->adviser->exami1->name.'</p>':'' !!}
{!! isset($pfe->adviser->exami2) ? '<p>'.$pfe->adviser->exami2->name.'</p>':'' !!}
{!! isset($pfe->adviser->exami3) ? '<p>'.$pfe->adviser->exami3->name.'</p>':'' !!}
<a href={{ route('Jury.create', ['pfe_id' => $pfe->id,'advisor' => '3']) }}>
<i class="tiny material-icons">add</i>