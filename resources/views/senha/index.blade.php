@extends('senha.layout')
@section('content')
    <div class="container">
        <div style="text-align: center; font-family: Arial, Helvetica, sans-serif;">
            <h4>{{$setor}}</h4>
            {{$tipate}}<br>
            <h1>{{$senha}}</h1>
            {{$data}}<br>
            Hora de chegada: {{$hora}}<br>
            (Horário local)
        </div>
    </div>
@endsection
