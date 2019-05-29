{!! isset($internship->adviser->exami1) ? '<p>'.$internship->adviser->exami1->name.'</p>':'' !!}
{!! isset($internship->adviser->exami2) ? '<p>'.$internship->adviser->exami2->name.'</p>':'' !!}
{!! isset($internship->adviser->exami3) ? '<p>'.$internship->adviser->exami3->name.'</p>':'' !!}
<a href={{ route('Jury.create', ['pfe_id' => $internship['id'],'advisor' => '3']) }}>
<i class="tiny material-icons">add</i>