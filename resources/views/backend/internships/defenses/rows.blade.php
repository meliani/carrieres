<tbody>
    @foreach ($collection as $defense)
        <tr>
            <td>
                {!! $defense->internship_id !!}
            </td>
           <td>
                {!! $defense->defense_at->format('d/m/y') !!},
                Amphi {!! $defense->classroom_id !!},
                à {!! $defense->defense_start_time !!}
            </td>
           <td>
                {!! $defense->internship->student->name !!}
            </td>
            <td>
                @isset($defense->internship->adviser->adviser1)
                    {!! $defense->internship->adviser->adviser1->name !!}
                @endisset
                @isset($defense->internship->adviser->adviser2)
                ,
                {!! $defense->internship->adviser->adviser2->name !!}
                @endisset
                @isset($defense->internship->adviser->exami1)
                ,
                {!! $defense->internship->adviser->exami1->name !!}
                @endisset
                @isset($defense->internship->adviser->exami2)
                ,
                {!! $defense->internship->adviser->exami2->name !!}
                @endisset
                @isset($defense->internship->adviser->exami3)
                ,
                {!! $defense->internship->adviser->exami3->name !!}
                @endisset
            </td>
        </tr>
    @endforeach
</tbody>