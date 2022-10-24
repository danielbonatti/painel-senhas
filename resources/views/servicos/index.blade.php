@extends('servicos.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <h2>Servicos</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($servicos as $servico)
                                <div class="col-md-6 mt-1">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="cart-title">{{$servico->tab_especi}}</h5>
                                            <a href="#" onclick="Imprime('{{$servico->tab_especi}}', 'Normal')" class="btn btn-primary">Normal</a>
                                            <a href="#" onclick="alert('oi')" class="btn btn-danger">Prioridade</a> 
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
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
@endsection
