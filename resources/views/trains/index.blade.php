
@extends('layouts.main')



@section('main-content')


    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-2">

                <table class="table table-dark table-hover p-1">
                    <thead>
                        <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col" colspan="2">Azienda</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">stazione di arriovo</th>
                        <th scope="col">Orario partenza</th>
                        <th scope="col">Orario arrivo</th>
                        <th scope="col">Giorno</th>
                        <th scope="col">Cod. Treno</th>
                        <th scope="col">
                            <a href="{{route('trains.create')}}">
                                <button  class="btn btn-warning btn-sm"> Nuovo habitat </button>
                            </a>
                        </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $train)
                        <tr>
                            <td colspan="2">
                                <a href='{{route("trains.show",$train->id)}}'>
                                    {{ ucfirst($train->azienda) }}
                                </a>
                            </td>
                            <td>
                                {{$train->stazione_di_partenza}}
                            </td>
                            <td>
                                {{$train->stazione_di_arrivo}}
                            </td>
                            <td>
                                {{$train->orario_di_partenza}}
                            </td>
                            <td>
                                {{$train->orario_di_arrivo}}
                            </td>
                            <td>
                                {{$train->data}}
                            </td>
                            <td>
                                {{$train->codice_treno}}
                            </td>
                            <td>
                                <button class="btn btn-success"> edit </button>
                                <button class="btn btn-danger"> del </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="col-8">
                    {{--$trains->links()--}}
                </div>
            </div>
        </div>
    </div>
@endsection


