
   @extends('layouts.app') 
    


@section('contenu')   
<main class="container">
  

  <h3 class="mt-5 mb-4">Liste  Etudiant   Inscrits</h3>
  <div class="d-flex justify-content-end">
  <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter Un Nouvel Etudiant</a>
  </div>
<table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">index</th>
    <th scope="col">Nom</th>
    <th scope="col">prenom</th>
    <th scope="col">classe</th>
    <th scope="col">Action</th>
    <th scope="col">sexe</th>
    
  </tr>
</thead>

    <tbody>
        @foreach($liste_etudiants as $liste_etudiant)
    <tr>
    <th scope="col">{{$loop->index + 1}}</th>
    <td>{{$liste_etudiant->nom}}</td>
    <td>{{$liste_etudiant->prenom}}</td>
    <td>{{$liste_etudiant->classe_id}}</td>
    <td>
       <a href="#" class="btn btn-info">Editer</a>
       <a href="#" class="btn btn-danger">Supprimer</a>
    </td>
  </tr>
  @endforeach
    </tbody>

  {{ $liste_etudiants->links() }}
</div>

</main>
@endsection
