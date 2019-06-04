<tbody>
    @foreach ($collection as $professor)
        <tr>
            <td>
                {!! $professor->name !!}
            </td>
            <td>
               @foreach ($professor->internships as $internship)
                    <p>{!! advising_type($internship->pivot->advising_type) !!} -                     
                    {!! $internship->student->pfe_id !!}
                    {!! isset($internship->binome)?'B : '.$internship->binome->pfe_id:'' !!}
                </p>
               @endforeach
            </td>
            <td>
                @foreach ($professor->internships as $internship)
                     <p>
                     {!! $professor->is_available($internship->defense_at,$internship->defense_start_time) !!}
                 </p>
                @endforeach
             </td>
              <td>
               @foreach ($professor->internships as $internship)
                    <p>{!! isset($internship->defense_at)?$internship->defense_at->format('d M'):'Not planned yet !' !!}</p>
               @endforeach
            </td>
            <td>
                @foreach ($professor->internships as $internship)
                    <p>{!! isset($internship->defense_start_time)?$internship->defense_start_time:'Not planned yet !' !!}</p>
               @endforeach
            </td>               
            <td>
                @foreach ($professor->internships as $internship)
                    <p>{!! isset($internship->classroom_id) ? 'Amphi '.$internship->classroom_id:'Not planned yet !' !!}</p>
               @endforeach
            </td>
        </tr>
    @endforeach
</tbody>