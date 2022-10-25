<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Setores</title>
  </head>
  <body>

    <div class="container">
      @yield('content')
  </div>

    <!-- JavaScript -->
    <script>
      // Imprime senha  
      function Imprime(setor, tipo){
        var data = new Date().toLocaleDateString();
        var hora = new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});

        document.write('<div style="text-align: center; font-family: Arial, Helvetica, sans-serif;">')
        document.write('<h5>'+setor+'</h5>')
        document.write(tipo)
        document.write('<br>')
        document.write('<h1>ABC002</h1>')
        document.write('<br><br>')
        document.write(data)
        document.write('<br>')
        document.write('Hora de chegada '+hora)
        document.write('<br>')
        document.write('(Horário local)')
        document.write('</div>')

        window.print()
        window.location.href = "{{route('setores')}}"
      }
    </script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
