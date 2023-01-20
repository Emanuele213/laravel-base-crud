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
              <th class="text-center" scope="col">Visualizza fumetto</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($comics as $comic)
            <tr>
                <th class="text-center" scope="row">{{ $comic['title']}}</th>
                <td class="text-center">{{ $comic['price']}} €</td>
                <td class="text-center">{{ $comic['series']}}</td>
                <td class="text-center">{{ $comic['sale_date']}}</td>
                <td class="text-center">{{ $comic['type']}}</td>
                <td class="text-center"><img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}"></td>
                <td class="text-center"><a href="" class="btn btn-primary">Visualizza</a></td>
              </tr>
            @endforeach
          </tbody>
    </table>
@endsection
