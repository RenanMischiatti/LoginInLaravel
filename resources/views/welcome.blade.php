<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Download Laravel</title>
  </head>
  <body>
   
    <div style="width: 100%; height:100vh; display:flex; justify-content:space-evenly; align-items:center; background:#353b48; ">
        <a href="#login" class="btn btn-primary">Ir para Login</a>
    </div>

    <div id="login" style="width:100%; height:100vh; background:#2f3640; display:flex; align-items:center; justify-content:center;">

            <div style="width: 400px; height:400px; background:white; display:flex; align-items:center;justify-content:center;">
                <form method="POST" action="/autenticar">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    @if ($errors->any())
                      @foreach ($errors->all() as $error)
                          <p style="color: red; text-align:center">{{ $error }} </p>
                      @endforeach
                    @endif                    
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="cadastro" class="btn btn-primary">Cadastro</a>
                </form>
            </div>
            <!-- Success Register -->
            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" style="position:fixed; top:0%; width:100%;" role="alert">
                    {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif 
            <!-- Login error -->
            @if (session('danger'))
              <div class="alert alert-danger alert-dismissible fade show" style="position:fixed; top:0%; width:100%;" role="alert">
                    {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif 
            
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>