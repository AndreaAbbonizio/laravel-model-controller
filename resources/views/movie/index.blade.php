@extends('layouts/main')


@section('content')

<div class="container">
    <h1>Tabella Movies</h1>

    <hr>


    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Titolo Originale</th>
            <th scope="col">Nazionalità</th>
            <th scope="col">Data d'uscita</th>
            <th scope="col">Voto</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($movies as $singleMovie)
          <tr>
            <th scope="row">{{$singleMovie->id}}</th>
            <td><strong>{{$singleMovie->title}}</strong></td>
            <td>{{$singleMovie->original_title}}</td>
            <td>{{$singleMovie->nationality}}</td>
            <td>{{$singleMovie->date}}</td>
            <td>{{$singleMovie->vote}}</td>
          </tr>   
          @endforeach  
        
        </tbody>
      </table>
</div>

@endsection