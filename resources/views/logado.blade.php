<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="css/logado.css">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body style="background: #ffffff; 
    @if(session('logou'))
      overflow-y: hidden;
    @endif">

      @if(session('logou'))
        <div id="open" style="width: 100%; height:100vh; display: flex; align-items:center; justify-content:center; background:#8854d0;">
            <h1 style="text-align:center;">Olá <span style="color: #ffffff;">{{auth()->user()->name}}</span> :)
<br>
              <span>
                <div class="spinner-border text-light" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </span>
            </h1>    
                    
        </div> 
      @endif
        <div id="conteudo" style="width: 100%; height:100vh;" id="nav">
            <nav class="navbar navbar-expand-md navbar-dark" style="background:#8854d0;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Nav</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link" href="#">Carteira</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link" href="#">Investimentos</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link active" href="logout" tabindex="-1" aria-disabled="true">SAIR</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div> 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/logado/script.js"></script>
    </body>
</html>



