@extends('servicos.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4 text-center mt-1">
                                <a href="{{ route('unidades') }}"><i class="fa fa-arrow-left" style="font-size:36px"></i></a> 
                            </div>    
                            <div class="col-md-4 text-center mt-1">
                                <h2>Unidade: {{$unid}}</h2>
                            </div>
                            <div class="col-md-4 text-center mt-1">
                                <h2>Servicos</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($servicos as $servico)
                                <div class="col-md-6 mt-1">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$servico->tab_especi}}</h5>
                                            <a href="#" onclick="Imprime('{{$servico->tab_especi}}', 'Normal')" class="btn btn-primary">Normal</a>
                                            <a href="#" onclick="Imprime('{{$servico->tab_especi}}', 'Prioridade')" class="btn btn-danger">Prioridade</a> 
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
