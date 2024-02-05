<div>
	<div style="display: none;" x-data="{ show: false }" x-init="Livewire.on('showToast', message => {
    show = true;
    setTimeout(() => show = false, 3000); // Hide the toast after 3 seconds
})
Livewire.hook('message.processed', (message, component) => {
    if (message.updateQueue && message.updateQueue.includes('{{ $this->id }}')) {
        show = true;
        setTimeout(() => show = false, 3000); // Hide the toast after 3 seconds
    }
})" x-show.transition.opacity="show">
		<div class="toast toast-top toast-end">
			<div class="alert alert-{{ $type }}">
				<span>{{ $message }}</span>
			</div>
		</div>
	</div>
	
</div>
