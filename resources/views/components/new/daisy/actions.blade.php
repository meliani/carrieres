<div>
	<div class="flex justify-end h-24">
		<x-daisy.tooltip>
			<x-slot name="label">{{ __('Mark as Signed') }}</x-slot>
			<button class="bg-white btn btn-ghost btn-circle btn-sm hover:bg-teal-100 }}"
				wire:click="markAsSigned('{{ $contract->id }}')">
				<x-icon-hand-thumb-up
					class="w-6 h-6 {{ $contract->progress_status == App\Enum\ContractProgressEnum::signed() ? 'fill-indigo-500' : '' }}" />
			</button>
		</x-daisy.tooltip>
	</div>
</div>