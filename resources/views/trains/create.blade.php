
@extends('layouts.main')


@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">

                <form action="{{ route('trains.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Azienda</label>
                        <input type="text" name="azienda" id="azienda" required>
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Stazione di partenza</label>
                        <input type="text" name="stazione_di_partenza" id="stazione_di_partenza">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Stazione di arrivo</label>
                        <input type="text" name="stazione_di_arrivo" id="stazione_di_arrivo">
                    </div>
                    
                    <div class="mb-3">
                        <label for="image_url">Orario di partenza</label>
                        <input type="text" name="orario_di_partenza" id="orario_di_partenza">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Orario di arrivo</label>
                        <input type="text" name="orario_di_arrivo" id="orario_di_arrivo">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Giorno</label>
                        <input type="text" name="data" id="data">
                    </div>

                    <div class="mb-3">
                        <label for="image_url">COdice Treno</label>
                        <input type="text" name="codice_treno" id="codice_treno">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection