<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>



    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>E<span>ventPlaza</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(/images/wall.png)"></div>
                <h4>{{ Auth::user()->prenom }}</h4>
                <small>Administrateur</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="/home">
                            <span class="las la-home"></span>
                            <small>Acceuil</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('evenement.create') }}">
                            <span class="fas fa-sheep"></span>
                            <small>Ajouter Evenement</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('liste_evenement') }}">
                            <span class="fas fa-sheep"></span>
                            <small>Les Evenement</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(/images/mouton14.jpg)"></div>
                        <span class="las la-power-off"></span>
                        <span><a href="{{ route('user.logout') }}" class="btn btn-danger">Se Déconnecter</a></span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>EventPlaza</h1>
                <small>Ajout / Evenement</small>
            </div>
            <div class="scrolling-text">
                <h2>Bienvenue {{ Auth::user()->prenom }} {{ Auth::user()->nom}} Voici La Page de la liste des evenement</h2>
            </div>


        </main>


        <div class="container">
            <h1 class="text-center">Liste Des Evenements</h1>
            <div class="row">
                @foreach ($evenements as $evenement)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($evenement->photo) }}" class="card-img-top" alt="{{ $evenement->libelle }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <a href="{{ route('evenement.details', $evenement->id) }}" class="btn btn-primary btn-block">Détail</a>
                            <a href="/modifier-evenement/{{ $evenement->id }}" class="btn btn-success btn-block">Modifier</a>
                            <a href="/supprimer-evenement/{{ $evenement->id }}" class="btn btn-danger btn-block">Supprimer</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


</body>
</html>
<style>
.square-image {
    width: 3cm; /* Ajustez cette valeur selon vos besoins */
    height: 3cm; /* Ajustez cette valeur selon vos besoins */
    object-fit: cover; /* Assurez-vous que l'image remplit la taille spécifiée */
}
.container{
    background-color: rgba(233, 233, 10, 0.95);
}

.user-details-title {
    background-color: #d0b310;
    color: #fff;
    padding: 10px;
    text-align: center;
}
.page-header {
    text-align: center;
}

.welcome-message {
    text-align: center;
}
.page-header {
    text-align: center;
}

.scrolling-text {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    background-color: green;
    color: white;
}

.scrolling-text h2 {
    animation: scroll 15s linear infinite;
}

@keyframes scroll {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>
