<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>GESTION MOUTON</title>
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                <small>Modifier / Evenement</small>
            </div>
            <div class="scrolling-text">
                <h2>Bienvenue {{ Auth::user()->prenom }} {{ Auth::user()->nom}} Voici La Page Pour modifier Un Evenement</h2>
            </div>


        </main>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MODIFIER EVENEMENT</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('modifier-evenement', ['id' => $evenement->id]) }}" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') Utilisez la méthode PUT pour la modification --}}

                        <div class="form-group">
                            <label for="libelle">Libellé</label>
                            <input type="text" class="form-control @error('libelle') is-invalid @enderror" id="libelle" name="libelle" value="{{ old('libelle', $evenement->libelle) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $evenement->date) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="lieu">Lieu</label>
                            <input type="text" class="form-control @error('lieu') is-invalid @enderror" id="lieu" name="lieu" value="{{ old('lieu', $evenement->lieu) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $evenement->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo actuelle</label>
                            <img src="{{ $evenement->photo }}" alt="Current Photo" class="img-thumbnail">
                        </div>

                        <div class="form-group">
                            <label for="nouvelle_photo">Photo</label>
                            <input type="file" class="form-control @error('nouvelle_photo') is-invalid @enderror" id="nouvelle_photo" name="nouvelle_photo" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier l'événement</button>
                        <a href="{{ route('liste_evenement') }}" class="btn btn-danger">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</div>

</body>
</html>


<style>
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

