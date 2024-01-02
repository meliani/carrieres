@extends('layouts.ui.app')

@section('title', '| mes documents de stage')

@section('users_buttons')
    @include(Button::home_button())
@endsection

@section('content')
    <div class="container">
        <div class="row center">
            <h4 class="header light center blue-text text-lighten-1">Notes concernant le stage</h4>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <div class="card-content">
                        <span class="card-title">{{ $internship->title }}</span>
                        <p></p>
                    </div>
                    <div class="row">
                        {{-- {{
                    Form::model($internship,['route'=>['backend.internhips.pedagogic_validation.update',$internship],'method'
                    =>
                    'PUT']) }} --}}
                        {!! Form::open([
                            'action' => ['Backend\Internship\NoteController@update', 'internship_id' => $internship->id],
                            'method' => 'PUT',
                            'files' => false,
                        ]) !!}

                        {{ Form::textGroup(
                            [
                                'name' => 'note',
                                'value' => $internship->notes['note'] ?? '',
                                'label' => 'Ajouter une note',
                                'placeholder',
                                'class' => 'materialize-textarea',
                                'icon' => 'edit',
                                'helper',
                                'required',
                                'cols' => 12,
                                'type' => 'textarea',
                            ],
                            $errors,
                        ) }}
                    </div>


                    {{-- <button wire:click="sign">signer</button> --}}
                    {{-- <button type="submit" href="#!" wire:click="sign({{ $internship->id }})"
                    class="modal-close waves-effect waves-green btn-flat">Sign</a> --}}
                    {{-- wire:click.prevent="addPedagogicValidation('{{ json_encode($signature_details) }}')"
                    --}}
                    <div class="card-action">
                        <input type="submit" href="#!" class="waves-effect waves-green btn-flat" name="Valider"
                            value="Valider">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            {{-- Display all validation cards from other stuff --}}
            @if (!empty($internship->administration_signed_at))
                <div class="col s12 m6 l6">
                    <div class="card-panel">
                        <div class="row center">
                            Convention signée par :
                            <h1 class="light center blue-text text-lighten-1">
                                {{ App\Models\Profile\Person::find($internship->meta_administration_signature['signatures']['signatory_id'])->long_full_name }}
                                {{-- {{$internship->meta_administration_signature}} --}}
                            </h1>date de signature :
                            <h1 class="light center blue-text text-lighten-1">
                                {{ \Carbon\Carbon::parse($internship->administration_signed_at)->format('d M Y') }}
                            </h1>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
