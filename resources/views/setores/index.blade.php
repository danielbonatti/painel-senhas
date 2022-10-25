@extends('setores.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <h2>Setores</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($setores as $setor)
                                <div class="col-md-6 mt-1">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$setor->pcc_especi}}</h5>
                                            <a href="#" onclick="ImprimeN()" class="btn btn-primary">Normal</a>
                                            <a href="#" onclick="ImprimeP()" class="btn btn-danger">Prioridade</a> 
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
