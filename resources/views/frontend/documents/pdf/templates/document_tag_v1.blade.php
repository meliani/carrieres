<div style="float:right;">
{!! QrCode::size(180)->generate(url('url/v1/'.
encrypt(
auth()->user()->id.'/'.auth()->user()->people->internship->id
.'/'.auth()->user()->people->internship->date_debut
.'/'.auth()->user()->people->internship->date_fin))) !!}
</div>