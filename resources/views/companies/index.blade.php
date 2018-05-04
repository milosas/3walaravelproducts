@extends('layout.master')


@section('content')
  <table>
  <tr>
    <th>Name</th>
    <th>Country</th>
  </tr>
@foreach ($company as $categor)

    <tr>
  <td><a href="{{route('companies.company',$categor)}}"> {{$categor->name}}</a></td>
    <td>{{$categor->country}}</td>

    </tr>
    <tr>

    </tr>

@endforeach
  </table>
@endsection
