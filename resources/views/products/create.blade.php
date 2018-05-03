@extends('layout.master')

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<form class=""  action="{{route('products.store')}}" method="post">
  @csrf
  <a href="{{route('products.page')}}">Atgal</a>
  <input name="name" class="form-control form-control-lg" type="text" placeholder="Name">
  <br>
  <input name="description" class="form-control form-control-lg" type="text" placeholder="Description">
<br>
  <input name="photo" class="form-control form-control-lg" type="text" placeholder="Photo">
  <br><input name="price" class="form-control form-control-lg" type="text" placeholder="Price">
  <br><input name="quantity" class="form-control form-control-lg" type="text" placeholder="Quantity">
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
  <br><button type="submit" name="submit" class="btn btn-primary">Create</button>
  <br>
</form>

@endsection
