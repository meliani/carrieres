<x-guest-layout>
    <x-slot name="header">
        <x-banner-dialog />

    </x-slot>
<div>
    {{-- student should choose a project from a list with internships->student->name prop --}}
<form wire:submit.prevent="joinProject">

    <div class="input-field">
        {{ Form::selectGroup(
            [
                'id' => 'project',
                'name' => 'project',
                'label' => 'Project',
                'placeholder' => 'Select a project',
                'class' => 'validate',
                'icon' => 'work',
                'helper' => 'Choose a project',
                'required' => 'required',
                'wiremodel' => 'project',
                'cols' => 3,
                'data' => 
                    $projects,
            ],
            $errors,
        ) }}

        @error('project')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field">
        <button wire:click="joinProject" class="btn waves-effect waves-light" type="submit">Join</button>
    </div>
    ACAB - {{ $project }}
</form>
</div>

    @push('endofbody')
        @liveCalendarScripts
    @endpush

</x-guest-layout>
