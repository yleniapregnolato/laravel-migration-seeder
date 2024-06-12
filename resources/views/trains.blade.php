@extends('layouts.app')

@section('content')
    <h1 class="text-center">TRENI</h1>



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
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->data_partenza }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->data_arrivo }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->in_orario }}</td>
                    <td>{{ $train->cancellato }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
