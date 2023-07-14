<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        
        <!-- Styles -->
    </head>
    <body>
    
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <h1 class="mt-5 mb-4">Halaman Login</h1>

              <form method="post" action="login">
                @csrf
                <div class="mb-3">
                    <input type="text" name="username" id="username" 
                    required
                    class="form-control">
                </div>
                <div class="mb-3">
                  <input required type="password" class="form-control" id="password" name="pass" placeholder="*****">
                </div>
              
               

                <div class="mb-3">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!---->
        <script>
          /*document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault();
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            if (email === 'riize' && password === 'riize') {
              alert('Login berhasil!!');
            } else {
              document.getElementById('iferror').classList.remove('d-none');
            }
          });*/
        </script>
    </body>
      
</html>