<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Senha</title>
  </head>
  <body>

    <div class="container">
      
    </div>

    <!-- JavaScript -->
    <script>
      // Imprime senha  
      function Imprime(senha){
        var data = new Date().toLocaleDateString();
        var hora = new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});

        document.write('<div style="text-align: center; font-family: Arial, Helvetica, sans-serif;">')
        //document.write('<h5>'+setor+'</h5>')
        //document.write(tipo)
        document.write('<br>')
        document.write('<h1>'senha'</h1>')
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
      Imprime('{{$senha}}');
    </script>
  </body>
</html>
