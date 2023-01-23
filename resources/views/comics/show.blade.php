@extends('layout.base')

@section('content')

<table class="table table-dark">
    <thead>
        <tr>
          <th class="text-center" scope="col">Title</th>
          <th class="text-center" scope="col">Price</th>
          <th class="text-center" scope="col">Series</th>
          <th class="text-center" scope="col">Sale date</th>
          <th class="text-center" scope="col">Type</th>
          <th class="text-center" scope="col">Images</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
            <th class="text-center" scope="row">{{ $comic->title}}</th>
            <td class="text-center">{{ $comic->price}} €</td>
            <td class="text-center">{{ $comic->series}}</td>
            <td class="text-center">{{ $comic->sale_date}}</td>
            <td class="text-center">{{ $comic->type}}</td>
            <td class="text-center"><img src="{{ $comic->thumb}}" alt="{{ $comic->title}}"></td>
          </tr>
      </tbody>
    </table>
    <p><strong>Descrizione: </strong>{{ $comic->description }}</p>
   <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna indietro</a>
@endsection
