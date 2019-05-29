<tbody>
    @foreach ($collection as $professor)
        <tr>
            <td>
                {!! $professor->name !!}
            </td>
           <td>

            </td>
           <td>
               @isset($professor->internships->defenses)
                {!! $professor->internships->defenses->defense_at !!}
               @endisset
            </td>
            <td>

            </td>
        </tr>
    @endforeach
</tbody>