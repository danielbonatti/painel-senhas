@extends('triagem.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <h2>Unidades</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($unidades as $unidade)
                                <div class="col-md-6 mt-1">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="cart-title">{{$loop->index}} - {{$unidade->pcc_espsim}}</h5>
                                            <a href="#" class="btn btn-primary">Normal</a>
                                            <a href="#" class="btn btn-danger">Prioridade</a> 
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
