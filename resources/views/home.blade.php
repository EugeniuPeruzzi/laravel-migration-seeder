<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-wrap mt-5">
                @foreach ($trains as $train)
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <h6 class="mt-4">Partenza da: <strong>{{ $train->stazione_di_partenza }}</strong></h6>
                            <h6 class="">Arrivo a: <strong>{{ $train->stazione_di_arrivo }}</strong></h6>
                            <p>Orario di partenza:
                                <strong>{{ $train->cancellato ? 'Treno cancellato' : $train->orario_di_partenza }}</strong>
                            </p>
                            <p>Orario diarrivo: <strong>{{ $train->orario_di_arrivo }}</strong></p>
                            <p><strong>{{ $train->in_orario ? 'In pefetto oraio' : 'In ritardo' }}</strong></p>
                            <p>Codice treno: {{ $train->codice_treno }} con carozze numero:
                                {{ $train->numero_carrozze }} </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col">
                <h1>BONUS</h1>
                @foreach ($bonus_trains as $bonus_train)
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bonus_train->azienda }}</h5>
                            <h6 class="mt-4">Partenza da: <strong>{{ $bonus_train->start_station }}</strong></h6>
                            <h6 class="">Arrivo a: <strong>{{ $bonus_train->end_station }}</strong></h6>
                            <p>Orario di partenza:
                                <strong>{{ $bonus_train->canceled ? 'Treno cancellato' : $bonus_train->departure_time }}</strong>
                            </p>
                            <p>Orario diarrivo: <strong>{{ $bonus_train->arrival_time }}</strong></p>
                            <p><strong>{{ $bonus_train->in_time ? 'In pefetto oraio' : 'In ritardo' }}</strong></p>
                            <p>Codice treno: {{ $bonus_train->ticket_code }} con carozze numero:
                                {{ $bonus_train->number_vagons }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
