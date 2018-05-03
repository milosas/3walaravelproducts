@extends('layout.master')


@section('content')
  <table>
  <tr>
    <th>Category</th>
    <th>description</th>
  </tr>
@foreach ($category as $categor)

    <tr>
    <td>{{$categor->name}}</td>
    <td>{{$categor->description}}</td>

    </tr>

@endforeach
  </table>
@endsection
