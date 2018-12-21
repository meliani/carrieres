<div class="container offre col s12 m12">
  <table class="responsive-table centered highlight scale-transition scale-in">
    <thead>
      <tr>
          <th>Nom et prénom</th>
          <th>Option</th>
          <th>Entreprise</th>
          <th>Titre du PFE</th>
          <th>Date de déclaration</th>
          <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($encadrements as $pfe)
      <tr>
        <td>{{ $pfe->name }}</td>
        <td>{{ $pfe->option_text }}</td>
        <td>{{ $pfe->raison_sociale }}</td>
        <td>{{ $pfe->intitule }}</td>
        <td>{{ $pfe->created_at }}</td>
        <td>
        <a class="btn-floating btn-small waves-effect waves-light red" href="{{ $pfe->id }}"><i class="material-icons">supervisor_account</i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>