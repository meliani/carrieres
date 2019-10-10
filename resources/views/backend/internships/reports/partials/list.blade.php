<div class="container col s12 m12">
  <table class="table highlight scale-transition scale-in">
    <thead>
      <tr>
        <th width="5%">Id</th>
        <th width="13%">Nom et prénom</th>
        <th width="15%">Cycle</th>
        <th width="15%">Entreprise</th>
        <th width="25%">Titre du Rapport</th>
        <th width="10%">Date de soumission</th>      
        <th width="10%">Rapport de stage</th>      
        <th width="10%">Attestation de stage</th>      
        <th width="10%">Date de soumission</th>      
          <th width="25%">Actions</th>            
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        @include('backend.internships.reports.partials.records')
      @endforeach
    </tbody>
  </table>
</div>