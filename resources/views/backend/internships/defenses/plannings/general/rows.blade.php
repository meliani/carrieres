<tbody>
    @foreach ($collection as $internship)
        <tr>
            <td>
                {!! $internship->defense_at->format('D d M Y') !!}
            </td>
           <td>
               {!! $internship->defense_start_time !!}
            </td>
           <td>
            Amphi {!! $internship->classroom_id !!}
            </td>
           <td>
                <p>
                    ID PFE : {!! $internship->student->pfe_id !!}
                    {!! isset($internship->binome)?'.'.$internship->binome->pfe_id:'' !!}
                </p>
                <p>
                    Option : {!! $internship->student->option_text !!}
                </p>
                <p>
                    Entreprise : {!! $internship->raison_sociale !!}
                </p>
                <p>
                    Intitulé : {!! $internship->intitule !!}
                </p>
                <p>
                    Elève : {!! $internship->student->name !!}
                    {!! isset($internship->binome)?','.$internship->binome->name:'' !!}
                </p>
    @isset($internship->adviser->adviser1)
    <p>Encadrant 1 : 
        {!! $internship->adviser->adviser1->name !!}</p>
    @endisset
    @isset($internship->adviser->adviser2)
    <p>Encadrant 2 : 
    {!! $internship->adviser->adviser2->name !!}</p>
    @endisset
    @isset($internship->adviser->exami1)
    <p>Examinateur 1 : 
    {!! $internship->adviser->exami1->name !!}</p>
    @endisset
    @isset($internship->adviser->exami2)
    <p>Examinateur 2 : 
    {!! $internship->adviser->exami2->name !!}</p>
    @endisset
    @isset($internship->adviser->exami3)
    <p>Examinateur 3 : 
    {!! $internship->adviser->exami3->name !!}</p>
    @endisset

            </td>
            <td>

            </td>
        </tr>
    @endforeach
</tbody>