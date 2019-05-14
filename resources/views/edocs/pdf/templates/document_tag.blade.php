<div style="float:right;">
{!! QrCode::size(180)->generate(url('Authentic?code=STAGE OUVRIER/'.
auth()->user()->people->internship->raison_sociale.'/'.
encrypt(
auth()->user()->id.'/'.auth()->user()->people->internship->id
.'/'.auth()->user()->people->internship->date_debut
.'/'.auth()->user()->people->internship->date_fin))) !!}
</div>