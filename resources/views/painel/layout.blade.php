<!DOCTYPE html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      .footer {
        background-color: #B7D8E1;
      }
    </style>

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

    <title>Painel</title>
  </head>
  <body class="d-flex flex-column h-100">

    <div class="container-fluid h-100">
      @yield('content')
    </div>
    
    <footer class="footer mt-auto py-3">
      <div class="container-fluid">
        <img src="{{ asset('images/logo.png') }}" width="280" class="img-fluid" alt="Hsist">
      </div>
    </footer>

    <!-- JavaScript -->
    <script>
      $(document).ready(function() {
        alert('chamou');  
        function preenche_dados() {
              $.get("{{ route('painel.chamada') }}").done(function(wo_dados) {
                  $('.table-itens > tbody').html('');
                  $(wo_dados).each(function() {
                      ws_linha = '<tr><td><h1>' + this.prt_nomreg + '</h1></td></tr>';
                      $('.table-itens > tbody').append(ws_linha);
                  });
              });
          }

          preenche_dados()
      })
    </script>
  </body>
</html>
