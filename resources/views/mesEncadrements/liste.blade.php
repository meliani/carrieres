<div class="container offre col s12 m12">
  <table class="responsive-table centered highlight scale-transition scale-in">
    <thead>
      <tr>
          <th>Nom et prénom</th>
          <th>Option</th>
          <th>Entreprise</th>
          <th>Titre du PFE</th>
          <th>Date de déclaration</th>
          <th>Ajouter Encadrant/Examinateur</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($encadrements as $pfe)
      <tr>
        <td>{{ $pfe->name }}</td>
        <td>{{ $pfe->option_text }}</td>
        <td>{{ $pfe->raison_sociale }}</td>
        <td>{{  str_limit($pfe->intitule, 100) }}</td>
         {{-- Limit teaser to 100 characters --}}
         <td>{{ $pfe->created_at }}</td>
         <td>
          <!-- <a class="btn-floating btn-small waves-effect waves-light red" href={{ route('mesEncadrements.show', $pfe->id) }}><i class="material-icons">remove_red_eye</i></a> -->
          <a class="btn-floating btn-small waves-effect waves-light red" href={{ route('mesEncadrements.show', $pfe->id) }}><i class="material-icons">supervisor_account</i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>