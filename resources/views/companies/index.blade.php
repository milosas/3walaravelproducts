@extends('layout.master')


@section('content')
  <table>
  <tr>
    <th>Name</th>
    <th>Country</th>
  </tr>
@foreach ($company as $categor)

    <tr>
    <td>{{$categor->name}}</td>
    <td>{{$categor->country}}</td>

    </tr>
    <tr>
      
    </tr>

@endforeach
  </table>
@endsection
