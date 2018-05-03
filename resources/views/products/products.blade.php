@extends('layout.master')


@section('content')
@if (session('ZINUTE'))
  <div class="alert alert-success">
    {{session('ZINUTE')}}
  </div>

@endif

  <br>
  <br><br><br>
<div class="col-md-12 text-center">

<a class="button" href="{{route('products.create')}}">Create new product</a>
</div>

  <div class="row">
  @foreach ($products as $product)
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://media.moddb.com/images/mods/1/22/21735/grizzly3-300x200.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">{{str_limit($product->name, 10)}}</h4>
              <p class="card-text">{{str_limit($product->description, 10)}}</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">{{str_limit($product->price, 10)}}</a>
                <a class="btn btn-primary" href="{{route('singleproduct.page',$product->id)}}">Show more</a>
            </div>
          </div>
        </div>

      @endforeach
    </div>


@endsection
