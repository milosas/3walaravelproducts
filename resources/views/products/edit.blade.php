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
<form class=""  action="{{route('products.update', $product)}}" method="post">
  @method('PUT')
  @csrf
  <a href="{{route('products.page')}}">Atgal</a>
  <input value="{{$product->name}}" name="name" class="form-control form-control-lg" type="text" placeholder="Name">
  <br>
  <input value="{{$product->description}}" name="description" class="form-control form-control-lg" type="text" placeholder="Description">
<br>
  <input value="{{$product->photo}}" name="photo" class="form-control form-control-lg" type="text" placeholder="Photo">
  <br><input value="{{$product->price}}" name="price" class="form-control form-control-lg" type="text" placeholder="Price">
  <br><input value="{{$product->quantity}}" name="quantity" class="form-control form-control-lg" type="text" placeholder="Quantity">
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Companies</label>
    <select class="form-control" name="company_id">
      @foreach ($companies as $key)
        <option value="{{$key->id}}" {{$product->company_id == $key->id ? 'selected' :  ''}} > {{$key->name}} </option>
      @endforeach

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categories</label>
    <select class="form-control" name="category_id">
      @foreach ($categories as $key)
        <option value="{{$key->id}}" {{$product->category_id == $key->id ? 'selected' :  ''}} >{{$key->name}}</option>
      @endforeach

    </select>
  </div>
  <br><button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
  <br>
</form>
@endsection
