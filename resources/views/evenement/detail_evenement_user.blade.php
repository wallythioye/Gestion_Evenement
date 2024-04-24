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
                <small>EventPlaza</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="/">
                            <span class="las la-home"></span>
                            <small>Acceuil</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <span class="fas fa-sheep"></span>
                            <small>Inscrire</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">
                            <span class="fas fa-sheep"></span>
                            <small>Connexion</small>
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
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>EventPlaza</h1>
                <small>Details / Evenement</small>
            </div>
            <div class="scrolling-text">
                <h2>DETAILS DE L'\EVENEMENT  "{{ $evenement->libelle}}"</h2>
            </div>

        </main>



<h2>Details evenement</h2>
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Libellé</th>
                        <td>{{ $evenement->libelle }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $evenement->date }}</td>
                    </tr>
                    <tr>
                        <th>Lieu</th>
                        <td>{{ $evenement->lieu }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $evenement->description }}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img src="{{ asset($evenement->photo) }}" alt="{{ $evenement->libelle }}">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



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

