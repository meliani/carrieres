{{ Carbon\Carbon::now()->isoFormat('dddd Do MMMM YYYY') }}
{{ auth()->user()->people->title }} {{ auth()->user()->people->long_full_name }}



<div align="center"><!-- Signature -->
	<img src="{{ public_path('templates/pdf/images/signature.png') }}" name="Image1" align="center" width="231" height="124" border="0"/>
</div><!-- End Signature -->

