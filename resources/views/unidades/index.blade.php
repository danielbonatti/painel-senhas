@extends('unidades.layout')
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
                                <a href="{{route('servicos')}}" type="button" class="btn btn-primary btn-lg btn-block">{{$loop->index}} - {{$unidade->pcc_espsim}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
