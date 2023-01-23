@extends('layout.base')

@section('content')
@if (session('cancelled'))
    <div class="alert alert-success">
    {{ session('cancelled') }}
    </div>
@endif
    <table class="table table-dark">
        <thead>
            <tr>
              <th class="text-center" scope="col">Title</th>
              <th class="text-center" scope="col">Price</th>
              <th class="text-center" scope="col">Series</th>
              <th class="text-center" scope="col">Sale date</th>
              <th class="text-center" scope="col">Type</th>
              <th class="text-center" scope="col">Images</th>
              <th class="text-center" scope="col">Visualizza fumetto</th>
              <th class="text-center" scope="col">Modifica fumetto</th>
              <th class="text-center" scope="col">Elimina fumetto</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($comics as $comic)
            <tr>
                <th class="text-center" scope="row">{{ $comic->title}}</th>
                <td class="text-center">{{ $comic->price}} €</td>
                <td class="text-center">{{ $comic->series}}</td>
                <td class="text-center">{{ $comic->sale_date}}</td>
                <td class="text-center">{{ $comic->type}}</td>
                <td class="text-center"><img src="{{ $comic->thumb}}" alt="{{ $comic->title}}"></td>
                <td class="text-center"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Visualizza</a></td>
                <td class="text-center"><a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-primary">Modifica</a></td>
                <td class="text-center">
                    <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="POST" onsubmit="return confirm('Vuoi cancellare?')">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Elimina</button>
                    </form></td>
              </tr>
            @endforeach
          </tbody>
    </table>
    <a href="{{ route('comics.create') }}" class="btn c_yellow">Aggiungi</a>
@endsection
