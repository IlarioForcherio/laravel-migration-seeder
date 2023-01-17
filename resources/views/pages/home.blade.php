@extends('layouts.app')


@section('main')






<table class="table">
    <thead>
      <tr>
        <th scope="col">Compagnia</th>
        <th scope="col">Partenza</th>
        <th scope="col">Arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Binario</th>
        <th scope="col">Prezzo</th>
      </tr>
    </thead>

    <tbody>
        @foreach ( $trains as $elem )
      <tr>
        <td>{{$elem['compagnia']}}</td>
        <td>{{$elem['partenza']}}</td>
        <td>{{$elem['destinazione']}}</td>
        <td>{{$elem['orario_partenza']}}</td>
        <td>{{$elem['orario_arrivo']}}</td>
        <td>{{$elem['binario']}}</td>
        <td>{{$elem['prezzo']}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>





@endsection

