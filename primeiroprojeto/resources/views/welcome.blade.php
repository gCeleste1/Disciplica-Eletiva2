<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FisseAPP</title>
        <link rel="shortcut icon" href="img"> <!-- referencia a imagem -->

        <!-- Google fonts Lato-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0
        ,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">

        <!-- CSS do Projeto (VEM DEPOIS DO CSS DO BOOTSTRAP) -->

        <link rel="stylesheet" href="resources/css/app.css">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

            </head>

    <body class="container">
        <!-- NAVBAR -->
        <nav class="nav.navbar.navbar-expand-lg.fixed-top.bg-primary-collor " id='navbar'>
              <!-- colocando uma navbar que  expande quando
                   e esta fixada no topo  -->
            <div class="container.py-3"> <!--  py-3 é para dar  padding 3 encima e embaixo do eixo Y -->
                <a href="#" class="navbar-brand"> <!-- Logo do Fisse -->
                    <img src="img " alt="">
                </a>
            </div>
        </nav>
    </body>
</html>
