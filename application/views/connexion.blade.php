@extends('templates.main')
@section('content')

skibidi
<img>
<img>
<form method="POST" action="{{URL_INDEX}}?action=connexion">Connexion

<label>Email : </label>
<input name="email" type="email" required></input>
<label>Mot de passe : </label>
<input type="password" name="Motdepasse" required></input>
<input type="submit"></input>
</form>
Pas encore de compte ? 
<a href="{{URL_INDEX}}?page=inscription">Inscription</a>

@endsection