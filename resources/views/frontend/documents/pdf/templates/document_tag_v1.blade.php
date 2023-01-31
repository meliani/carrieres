<div style="float:right;">
{!! QrCode::size(180)->generate(url('url/v1/'.
encrypt(
auth()->user()->id.'/'.auth()->user()->student->internship->id
.'/'.auth()->user()->student->internship->date_debut
.'/'.auth()->user()->student->internship->date_fin))) !!}
</div>