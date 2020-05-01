<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <title>Feladat választós teszt</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Játékos tanulás</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Feleletválasztós teszt
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="NewQuestion">Új kérdés hozzáadása</a>
                <a class="dropdown-item" href="NewAnswer">Új válasz hozzáadása</a>
                <a class="dropdown-item" href="ListQuestions">Kérdések kilistázása</a>
                <a class="dropdown-item" href="ListAnswers">Válaszok kilistázása</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feature 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feature 3</a>
            </li>

          </ul>
        </div>
      </nav>

    @yield('content')
</body>
</html>
