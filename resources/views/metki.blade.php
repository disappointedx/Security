@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


                <div class="card-body">
                    <button type="button" class="btn btn-primary">Создать метку</button>
                </div>
 <br>

@foreach($data as $item)
            <br>
            <h1>{{$item['user']->name. ' '. $item['user']->surname}}</h1>
            <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Номер метки</th>
      <th scope="col">Место</th>
      <th scope="col">Дата</th>
      <th scope="col">Статус</th>
    </tr>
  </thead>
  <tbody>
  @foreach($item['metki'] as $metka)
    <tr>
      <th scope="row">{{$metka->id}}</th>
      <td>{{$metka->country}}</td>
      <td>Otto</td>
      <td>{{$metka->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endforeach
    </div>
</div>
@endsection
