function Imprime(servico, tipo){
    var data = new Date().toLocaleDateString();
    var hora = new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});

    document.write('<div style="text-align: center;">')
    document.write('<h5>Unidade Padrão</h5>')
    document.write(tipo)
    document.write('<br>')
    document.write('<h1>ABC002</h1>')
    document.write(servico)
    document.write('<br><br>')
    document.write(data)
    document.write('<br>')
    document.write('Hora de chegada '+hora)
    document.write('<br>')
    document.write('(Horário local)')
    document.write('</div>')

    window.print()
    window.location.href = "#void"
    //window.location.href = "{{route('unidades')}}"
}