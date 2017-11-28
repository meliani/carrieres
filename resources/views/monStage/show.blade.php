@extends('layouts.ui')

@section('content')
<div class = "card-panel">
  <div class = "card-panel"><h3>{{  $offresStages->intitule_sujet }}</h3></div>
        <ul class="collection with-header">
        <li class="collection-header"><h5>{{  $offresStages->raison_sociale }}</h5></li>
        <li class="collection-item">{{  $offresStages->lieu_de_stage }}</li>
        <li class="collection-item">{{  $offresStages->descriptif }}</li>
        <li class="collection-item">{{  $offresStages->mots_cles }}</li>
        @if($offresStages->document_offre)
        <li class="collection-item">{{  Html::link($offresStages->document_offre) }}</li>
        @endif
      </ul>
</div>
      <h2>Color Theme Demo</h2>
      <hr/>
      <div class = "card-panel">	        
         <div class = "card-panel red lighten-2">		 
            <h1>Red Colored Theme</h1>
         </div>
         
         <span class = "red-text text-darken-2">
            <h2>Red Colored Text</h2>
         </span>
         
         <ul>          
            <li class = "red lighten-5"><p>Using red lighten-5</p></li>
            <li class = "red lighten-4"><p>Using red lighten-4</p></li>
            <li class = "red lighten-3"><p>Using red lighten-3</p></li>
            <li class = "red lighten-2"><p>Using red lighten-2</p></li>
            <li class = "red lighten-1"><p>Using red lighten-1</p></li>
            <li class = "red"><p>Using red</p></li>
            <li class = "red darken-1"><p>Using red darken-1</p></li>
            <li class = "red darken-2"><p>Using red darken-2</p></li>
            <li class = "red darken-3"><p>Using red darken-3</p></li>
            <li class = "red darken-4"><p>Using red darken-4</p></li>
            <li class = "red accent-1"><p>Using red accent-1</p></li>
            <li class = "red accent-2"><p>Using red accent-2</p></li>
            <li class = "red accent-3"><p>Using red accent-3</p></li>
            <li class = "red accent-4"><p>Using red accent-4</p></li>
         </ul>
      </div>
@endsection