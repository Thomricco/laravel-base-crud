
@extends('layouts.main')


@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4 text-center">
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{ucfirst($train->azienda)}}
                    </h5>
                </div>
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{$train->stazione_di_partenza}}
                    </h5>
                </div>
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{$train->stazione_di_arrivo}}
                    </h5>
                </div>
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{$train->orario_di_partenza}}
                    </h5>
                </div>
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{$train->orario_di_arrivo}}
                    </h5>
                </div>
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{$train->data}}
                    </h5>
                </div>
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{$train->codice_treno}}
                    </h5>
                </div>

                
                <div class="col-6">
                    <a href="{{route("trains.show",$train->id - 1)}}">
                        <button class="btn btn-success">Previous</button>
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route("trains.show",$train->id + 1)}}">
                        <button class="btn btn-success">Next</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection