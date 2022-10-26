<!DOCTYPE html>
<html lang="pt-br" class="h-100">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .container {
        width: auto;
        /*max-width: 680px;*/
        padding: 0 15px;
      }

      .footer {
        background-color: #f5f5f5;
      }
    </style>

    <title>Setores</title>
  </head>
  <body class="d-flex flex-column h-100">

    <main role="main" class="flex-shrink-0">
      <div class="container">
        @yield('content')
      </div>
    </main>
    
    <footer class="footer mt-auto py-3">
      <div class="container">
        <img src="{{ asset('images/logo.png') }}" width="280" class="img-fluid" alt="Hsist">
      </div>
    </footer>

    <!-- JavaScript -->
    <script>
      // Imprime senha  
      function Imprime(arr){
        window.location.href = '{{URL::to("/senha")}}/'+arr[0]
      }
      //window.location.href = '{{route("senha","P")}}'
    </script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
