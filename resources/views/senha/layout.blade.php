<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Senha</title>
  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>

    <!-- JavaScript -->
    <script>
      // Executa impressão
      window.print();

      // Retorna para seleção dos setores
      setInterval(function(){
        window.location.href = "{{route('setores')}}"
      }, 1000);
    </script>
      
    </script>
  </body>
</html>
