@extends('templates.main')
@section('content')

    <section class="about">
        <div class="formule">
            <div>
                <i class="fal fa-piggy-bank"></i>
                <h2>adhésion</h2>
                <h2>5€/mois</h2>
            </div>
            <div>
                <i class="fal fa-stopwatch"></i>
                <h2>Menu rapide</h2>
                <h2>12 €</h2>
                <p>Entrée / Plat<br>ou<br>Plat / Dessert</p>
            </div>
            <div>
                <i class="fal fa-ice-cream"></i>
                <h2>Menu gourmand</h2>
                <h2>15 €</h2>
                <p>Entrée / Plat / Dessert</p>
            </div>
        </div>
        <div class="about_text">
            <h2>A Notre Sujet</h2>
            <div class="description">
                <p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM
                    IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>
            </div>
            <div class="bouton">
                <a href="#">L'association</a>
            </div>
        </div>
    </section>

    <section class="today_menu">
 
        <div class="today_text">
            <h2>AU MENU AUJOURD'HUI</h2>
            <h3>PLAT A</h3>
            <p>{{$menu[0]['description']}}</p>
            <h3>PLAT B</h3>
            <p>{{$menu[1]['description']}}</p>
            <div class="today_bouton">
                <a href="{{URL_INDEX}}?page=menu">CONSULTER LES MENUS</a>
            </div>
        </div>
        <div class="today_image">
            <img id="img1" src="{{URL_IMG . $menu[0]['image']}}" alt="{{$menu_plat['description']}}">
            <img id="img2" src="{{URL_IMG . $menu[1]['image']}}" alt="hehe">
        </div>


    </section>

    <section class="plat_alea">
        <div class="alea_text">
            <h2>Nos plats</h2>
            <div>
                <a href="{{URL_INDEX}}?page=carte">CONSULTER LA CARTE complète</a>
            </div>
        </div>
        <div class="plat_image">
            @foreach($plats as $plat)
                <img src="{{URL_IMG . $plat['image']}}" alt="{{$plat['description']}} title=" {{$plat['description']}}">
            @endforeach
        </div>
    </section>


@endsection