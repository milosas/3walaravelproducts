@extends('layout.master')


@section('content')

{{$company->name}}
{{$company->country}}
{{$company->photo}}
<form class="" action="{{route('companiesdelete.page', $company->id)}}" method="post">
@csrf
@method('DELETE')
  <button type="submit" class="btn btn-danger">DELETE</button>
</form>

@endsection
