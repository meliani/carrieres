<tr>
    <td>
    {{ $student->id }}
    </td>
    <td>
    {{ $student->full_name }}
    </td>
    <td>
    {{ $student->program_id ?? 'NA' }}
    </td>
    <td>
    {{ $student->report->company_name }}
    </td>
    <td>
    {{ $student->report->report_title }}
    </td>
    <td>
    {{ $student->report->created_at }}
    </td>
    <td>
    {{ $student->report->paper_report }}
    </td>
    <td>
    {{ $student->report->paper_certificate }}
    </td>
    <td>
    {{ $student->report->paper_agreement }}
    </td>
    <td>
    {{ $student->report->paper_scorecard }}
    </td>
    <td>
        <a href="~/internships/reports/{{ $student->report->id }}/edit"><i class="material-icons">menu</i></a>
    </td>
</tr>