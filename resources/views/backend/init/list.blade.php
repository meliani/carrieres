<div class="container col s12 m12">
  {{$streams->count()}}
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%">ordre</th>
        <th width="5%">filiere</th>
        <th width="40%">Nom et prénom</th>
      </tr>
    </thead>
    <tbody>
      {{-- {{dd($streams)}} --}}

      @foreach ($streams as $stream)

      {{-- {{dd($stream)}} --}}
      <tr>
        <td class="strong">{{ $stream->order }}</td>
        <td><div class="sub strong">{{ $stream->short_title }}</div>
          <div class="sub strong">{{ $stream->students->count() }}</div>
        </td>
        <td>
        @foreach ($stream->students as $student)
          {{ $student->full_name }} / 
            {{-- <a class="blue btn-small" href={{ route('backend.init.create', ['id' => $student->internship['id'] ]) }}><i class="tiny material-icons">remove_red_eye</i></a> --}}
          @endforeach
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
<div class="center">
  <a class="blue btn-small" href={{ route('backend.init.create') }}>
      <i class="tiny material-icons">save</i>Generate pins</a>
    </div>