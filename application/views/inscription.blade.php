@extends('templates.main')
@push('css')
    <link href="{{URL_CSS}}inscription.css" rel="stylesheet">
@endpush
@section('content')

    <section class="formulaire">
        <div class="tuto">
            <div>
                <p>1</p>
                <p>Créez un compte</p>
            </div>
            <div>
                <p>2</p>
                <p>Prenez un repas</p>
            </div>
            <div>
                <p>3</p>
                <p>Réglez votre cotisation avec votre repas</p>
            </div>
        </div>
        <form id="form_inscription" method="POST" action="index.php?action=inscription">
            <label name="nom" id="nom">Nom</label>
            <input type=text name="nom" required>
            <label name="email" id="email">Email</label>
            <input type=email name="email" required>
            <label name="mdp" id="mdp">Mot de Passe</label>
            <input type=password name="mdp" required>
            <button type=submit>S'inscrire</button>
        </form>
        <div class="connexion">
            <h2>Pourquoi Adhérer ?</h2>
            <p>L'adhésion est nécessaire pour accéder aux repas de l'association. Vous bénéficiez en plus de la possiblité de réserver vos plats, via ce site web</p>
            <div class="bouton">
                <a href="#">L'ASSOCIATION</a>
            </div>
            <p>Vous avez déjà un compte ?</p>
            <div class="bouton">
                <a href="#">CONNEXION</a>
            </div>
        </div>
    </section>
    Déjà inscrit ? <a href="{{URL_INDEX}}?page=connexion.php">Se Connecter</a>
@endsection