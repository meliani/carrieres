<tbody>
    @foreach ($collection as $professor)
        <tr>
            <td>
                {!! $professor->name !!}
            </td>
            <td>
               @foreach ($professor->internships as $internship)
                    <p>{!! $internship->student->pfe_id !!}</p>                    
               @endforeach
            </td>
              <td>
               @foreach ($professor->internships as $internship)
                    <p>{!! $internship->defense_at->format('d M') !!}</p>
               @endforeach
            </td>
            <td>
                @foreach ($professor->internships as $internship)
                    <p>{!! $internship->defense_start_time !!}</p>
               @endforeach
            </td>               
            <td>
                @foreach ($professor->internships as $internship)
                    <p>Amphi {!! $internship->classroom_id !!}</p>
               @endforeach
            </td>
        </tr>
    @endforeach
</tbody>