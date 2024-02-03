<div class="col-span-6 sm:col-span-4">
	<x-label for="name" value="{{ __('Filter by anything') }}" />
	<x-input class="block mt-1 w-full" id="name" type="text" wire:model.live="searchTerm" autofocus />
	<x-input-error class="mt-2" for="name" />
	{{ __('Filter by names / organization / stream /  keyword or project id') }}
</div>
