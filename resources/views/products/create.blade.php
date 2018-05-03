@extends('layout.master')

@section('content')
<br>
<form class=""  action="{{route('store.page')}}" method="post">
  <label class="btn btn-primary" for="">New Product</label>
  <input class="form-control form-control-lg" type="text" placeholder="Name">
  <br>
  <input class="form-control form-control-lg" type="text" placeholder="Description">
<br>
  <input class="form-control form-control-lg" type="text" placeholder="Photo">
  <br><input class="form-control form-control-lg" type="text" placeholder="Price">
  <br><input class="form-control form-control-lg" type="text" placeholder="Quantity">
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" name="company_id">
      @foreach ($companies as $key)
        <option value="{{$key->id}}">{{$key->name}}</option>
      @endforeach

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Company</label>
    <select class="form-control" name="category_id">
      @foreach ($categories as $key)
        <option value="{{$key->id}}">{{$key->name}}</option>
      @endforeach

    </select>
  </div>
  <br><button type="submit" class="btn btn-primary">Create</button>
  <br>
</form>

@endsection
