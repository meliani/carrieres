<tbody>
    @foreach ($collection as $professor)
        <tr>
            <td>
                {!! $professor->full_name !!}
            </td>
            <td>
               @foreach ($professor->internships as $internship)
                    <p>{!! advising_type($internship->pivot->advising_type) !!} -                     
                    {!! $internship->student->pfe_id !!}
                    {!! isset($internship->binome)?' en binome avec : '.$internship->binome->pfe_id:'' !!}
                </p>
               @endforeach
            </td>
            <td>
                @foreach ($professor->internships as $internship)
                <p>
                    
                    > {!! $internship->raison_sociale !!}
                    / {!! $internship->intitule !!}
                </p>    
                     {{-- $professor->is_available($internship->defense_at,$internship->defense_start_time) --}}
                @endforeach
             </td>
            <td>
                @foreach ($professor->internships as $internship)
                <p>
                    {!! $internship->student->name !!}
                    {!! isset($internship->binome)?','.$internship->binome->name:'' !!}
                </p>
                     {{-- $professor->is_available($internship->defense_at,$internship->defense_start_time) --}}
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
                    <p>{!! isset($internship->classroom_id) ? 'Amphi'.$internship->classroom_id:'Not planned yet !' !!}</p>
               @endforeach
            </td>
        </tr>
    @endforeach
</tbody>