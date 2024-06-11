@extends('layouts.app')

@section('content')
<h1 class="text-center">TRENI</h1>


    @foreach ($trains as $train)
        <ul>
            <div class="fw-bold">Azienda: {{ $train->azienda }}</div> 
            <li>
                Stazione di arrivo: {{ $train->stazione_arrivo }}
            </li>
            <li>
                Orario di partenza: {{ $train->orario_partenza }}
            </li>
            <li>
                Orario di arrivo: {{ $train->orario_arrivo }}
            </li>
            <li>
                Codice treno: {{ $train->codice_treno }}
            </li>
            <li>
                Numero di carrozze: {{ $train->numero_carrozze }}
            </li>
            <li>
                In orario: {{ $train->in_orario }}
            </li>
            <li>
                Cancellato: {{ $train->cancellato }}
            </li>
        </ul>
    @endforeach

@endsection