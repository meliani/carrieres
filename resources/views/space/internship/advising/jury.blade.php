{!! isset($student->internship->adviser->exami1) ? '<p>'.$student->internship->adviser->exami1->name.'</p>':'' !!}
{!! isset($student->internship->adviser->exami2) ? '<p>'.$student->internship->adviser->exami2->name.'</p>':'' !!}
{!! isset($student->internship->adviser->exami3) ? '<p>'.$student->internship->adviser->exami3->name.'</p>':'' !!}
<a href={{ route('Jury.create', ['pfe_id' => $student->internship['id'],'advisor' => '3']) }}>
<i class="tiny material-icons">add</i>