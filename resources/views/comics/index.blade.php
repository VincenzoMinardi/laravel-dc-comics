@extends('comics')

@section('contents')
<h1 class="text-center">Comics</h1>
        <div class="container">
            <table class="table">
             <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo film</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data uscita</th>
                    <th scope="col">Tipologia</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($comics as $comic)
                    <tr>
                      <th scope="row">{{$comic->id}}</th>
                      <td>{{$comic->title}}</td>
                      <td>{{$comic->price}}</td>
                      <td>{{$comic->series}}</td>
                      <td>{{$comic->sale_date}}</td>
                      <td>{{$comic->type}}</td>
                      <td>
                        <a class="btn btn-primary" href="">View</a>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr> --}}
                   </tbody>
                </table>
              </div>
    
@endsection