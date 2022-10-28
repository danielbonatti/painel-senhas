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
        function preenche_dados() {
              $.get("{{ route('painel.chamada') }}").done(function(wo_dados) {
                  $('.senha > tbody').html('');
                  $(wo_dados).each(function() {
                      ws_linha = '<tr><td class="text-center">' +
                      '<p class="text-muted" style="font-size: 60px; font-weight: 1000;">' + this.sen_tipate + '</p>' +
                      '<p style="font-size: 90px; font-weight: 1000;">' + this.sen_codigo + '</p>' +
                      '<p class="text-muted" style="font-size: 60px; font-weight: 1000;">' + this.sen_guiche + '</p></td></tr>';
                      $('.senha > tbody').append(ws_linha);
                  });
              });

              $.get("{{ route('painel.histor') }}").done(function(wo_dados) {
                  $('.histor').html('');
                  $(wo_dados).each(function() {
                      ws_linha = '<tr><td class="text-left">' +
                      '<p class="text-dark" style="font-size: 40px; font-weight: 1000;">' + this.sen_codigo + '</p>' +
                      '<p class="text-muted" style="font-size: 20px; font-weight: 1000;">' + this.sen_guiche + '</p></td></tr>';
                      $('.histor').append(ws_linha);
                  });
              });
          }

          preenche_dados()
      })
    </script>
  </body>
</html>
