<div style="float:right;">
{!! QrCode::size(180)->generate(url('url/v1/'.
encrypt(
user()->id.'/'.user()->student->internship->id
.'/'.user()->student->internship->date_debut
.'/'.user()->student->internship->date_fin))) !!}
</div>