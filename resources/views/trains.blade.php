@extends('layouts.app')

@section('content')
    <h1 class="text-center">TRENI</h1>


    @foreach ($trains as $train)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Data di arrivo</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Numero di carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        {{-- <ul>
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
        </ul> --}}
    @endforeach
@endsection
