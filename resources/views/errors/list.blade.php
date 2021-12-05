@if (count($errors) > 0)
<div id="flash_message" class="card-panel" onclick="el=document.getElementById('flash_message');el.parentNode.removeChild(el);">
	<div class="card-content">
		<ul>
	    	@foreach ($errors->all() as $error)
			<h8 class="light red-text text-lighten-1"><li>{{ $error }}</li></h8>
    		@endforeach
	    </ul>
	</div>
</div>
@endif