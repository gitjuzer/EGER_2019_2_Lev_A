<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Játékos tanulás</title>

    {{--Külső könyvtárak--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">

        <a class="navbar-brand" href="/">
            Játékos tanulás
        </a>

        {{--Mobil nézet hamburger menü--}}
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{--Menü tartalma--}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/login">Bejelentkezés</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/registration">Regisztráció</a>
                </li>

                {{--TODO: Admin felületen jelenjen csak meg--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kérdések
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="NewQuestion">Új kérdés hozzáadása</a>
                        <a class="dropdown-item" href="/AnswerSelector/ListQuestions">Kérdések kilistázása</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <main>
        {{--Ide jön a tartalom--}}
        @yield('content')
    </main>

    {{--Külső könyvtárak--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>
</html>
