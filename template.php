<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Bootsap 5.1.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <!-- caa custom -->
        <link rel="stylesheet" href="css/app.css">
        <title>Agencia de viajes</title>
    </head>
    <body>

    <header class="p-4 shadow-sm">
        <div class="container navbar align-items-center justify-space-between">
            <!-- brand -->
            <a href="#" class="navbar-brand text-dark text-decoration-none">
                <i class="bi bi-globe2"></i>
                PHP Travel
            </a>
            <!-- navegación -->
            <nav class="navbar">
                <a href="/adminRegiones" class="nav-link text-dark">Regiones</a>
                <a href="/adminDestinos" class="nav-link text-dark">Destinos</a>
            </nav>
            <!-- login/register -->
            <div>
                <a href="/formLogin" class="btn btn-outline-dark">Login</a>
                <a href="/formRegister" class="btn btn-outline-warning">Register</a>
            </div>
        </div>
    </header>

    <main class="container">

      <h1>Contenido que cambia</h1>

    </main>

    <footer class="bg-dark p-4 fixed-bottom text-center text-light">
            © <?= date('Y') ?> - Todos los derechos reservados.
        </footer>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>