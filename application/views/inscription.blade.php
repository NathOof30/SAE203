@extends('templates.main')
@push('css')
    <link href="{{URL_CSS}}inscription.css" rel="stylesheet">
@endpush
@section('content')

    <section class="formulaire">
        <div class="tuto">
            <div>
                <div class="gros_chiffre">
                    <p>1</p>
                </div>
                <p>Créez un compte</p>
            </div>
            <div>
                <div class="gros_chiffre">
                    <p>2</p>
                </div>
                <p>Prenez un repas</p>
            </div>
            <div>
                <div class="gros_chiffre">
                    <p>3</p>
                </div>
                <p>Réglez votre cotisation avec votre repas</p>
            </div>
        </div>
        <div class="form">
            <form id="form_inscription" method="POST" action="index.php?action=inscription">
                 <h2>Inscription</h2>
                <label name="nom" id="nom">Nom :</label>
                <input type=text name="nom" required>
                <label name="email" id="email">Email :</label>
                <input type=email name="email" required>
                <label name="mdp" id="mdp">Mot de Passe :</label>
                <input type=password name="mdp" required>
                <button type=submit">S'inscrire</button>
            </form>
        </div>
        <div class="connexion">
            <h2>Pourquoi Adhérer ?</h2>
            <p>L'adhésion est nécessaire pour accéder aux repas de l'association. Vous bénéficiez en plus de la possiblité
                de réserver vos plats, via ce site web</p>
            <div class="bouton">
                <a href="#">L'ASSOCIATION</a>
            </div>
            <p>Vous avez déjà un compte ?</p>
            <div class="bouton">
                <a href="{{URL_INDEX}}?page=connexion.php">CONNEXION</a>
            </div>
        </div>
    </section>

    <section class="asso_text">
        <div>
            <p>L'association emploie un chef. Pour le reste, nous reposons sur le travail de volontaires. Si vous pouvez et voulez vous impliquer dans les différentes tâches, parlez-nous en lors de votre visite</p>
            <img src="{{URL_IMG}}./mojito.jpg" alt="Verre de Mojito">
        </div>
        <div>
            <img src="{{URL_IMG}}./vallee-asso.jpg" alt="Photo de le cuisine">
        </div>
    </section>
@endsection