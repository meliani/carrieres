@extends('layouts.ui')

@section('content')
<div class="container">

<ul class="collection">
<li class="collection-item avatar">
        <i class="material-icons circle red ">playlist_add_check</i>
        <span class="title">Remplir la declaration de stage</span>
        <p>
          Vous devez remplir votre declaration de stage avant de generer les documents.
        </p>

</li>
</ul>
<ul class="collection">
    <li class="collection-item avatar">
        <i class="material-icons circle green">sync</i>
    <a href={{ url('space/internship/submit/create') }} class="waves-effect waves-light btn green">
        <i class="material-icons right">save</i>Declarer mon stage</a>
    </li>
</ul>
</div>
@endsection