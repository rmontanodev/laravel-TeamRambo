<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <script src="//localhost:8000/mdbootstrap/js/jquery-3.4.1.min.js"></script>
    <link href="//localhost:8000/css/app.css" rel="stylesheet">
</head>
<body class="winter-neva-gradient


">
<div class="col-md-12" id="navbar">
    @include('Navbar.index')
</div>
<div class="container col-md-12">
    <div class="container-body col-md-10 offset-1">
        <div class="contenido">
            @yield('content')
        </div>
    </div>
</div>
<script src="//localhost:8000/mdbootstrap/js/popper.min.js"></script>
<script src="//localhost:8000/mdbootstrap/js/bootstrap.js"></script>
<script src="//localhost:8000/mdbootstrap/js/mdb.js"></script>
</body>
</html>
