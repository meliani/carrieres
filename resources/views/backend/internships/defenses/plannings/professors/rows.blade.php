<tbody>
    @foreach ($collection as $professor)
        <tr>
            <td>
                {!! $defense->internship_id !!}
            </td>
           <td>

            </td>
           <td>
                {!! $defense->internship->student->name !!}
            </td>
            <td>

            </td>
        </tr>
    @endforeach
</tbody>