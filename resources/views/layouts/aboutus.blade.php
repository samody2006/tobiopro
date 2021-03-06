<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - Tobio Properties</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css"> {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600" rel="stylesheet">
</head>



<body>

    <div class="column is-full is-mobile backgroundimg">
        <div class="container">
            <div class="column is-mobile is-centered">
                @include('layouts.navabout');
            </div>
        </div>
        <div class="container">
            <div class="has-text-centered centertext">
                <span class="icon has-text-white is-large">
                    <i class="far fa-building fa-5x"></i>
                </span>
                <h1 class="has-text-white centertextword">About Us</h1>
            </div>
        </div>
    </div>

    {{-- Deatils Section --}}
    <div class="columns is-mobile is-centered has-background-white">
        <div class="container has-text-centered aboutus has-text-dark">
            {{-- <img class="image face" src="/img/girl1.jpeg"> --}}
            <div class='equal-height'>
                <div class='is-flex is-horizontal-center'>
                    <figure class=''><img class="image face" src='/img/girl1.jpeg'></figure>
                </div>
            </div>
            <br>
            <p>Welcome to Tobio Properties, your number one Realtor and Real Estate Consultant for all kind of Real Estate, with a focus on fast, trust and efficient service.<br>
                <br>
                <p>Founded in August 2018 by Mercy T. Okoro, Tobio Properties has come a long way to assist home and abroad to axis. When Mercy T. Okoro first started out, her passion for fast and trustworthy drove them to do tons of search so that Tobio Properties can offer you the world's most advanced real state search engine. We now serve customers all over the world, and are thrilled that we're able to turn our passion into our own website.</p>
                <br>
                <p>We hope you enjoy our service as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
                <br>
                <p><i><b>Mercy T. Okoro</b></i></p>
        </div>
    </div>

    {{-- Footer --}} @include('layouts.footer') {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
</body>

</html>