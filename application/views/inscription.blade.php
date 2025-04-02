@extends('templates.main')
@push('css')
<link href="{{URL_CSS}}inscription.css" rel="stylesheet">
@endpush
@section('content')
<form id="form_inscription" method="POST" action="index.php?action=inscription">
<label name="nom" id="nom">Nom</label>
<input type=text name="nom" required>
<label name="email" id="email">Email</label>
<input type=email name="email" required>
<label name="mdp" id="mdp">Mot de Passe</label>
<input type=password name="mdp" required>
<button type=submit>S'inscrire</button>
</form>
Déjà inscrit ? <a href="{{URL_INDEX}}?page=connexion.php">Se Connecter</a>
@endsection