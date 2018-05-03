@extends('layout.master')


@section('content')


  <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://media.moddb.com/images/mods/1/22/21735/grizzly3-300x200.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">{{str_limit($product->name, 10)}}</h4>
              <p class="card-text">{{str_limit($product->description, 10)}}</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">{{str_limit($product->price, 10)}}</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">CATEGORY ID:{{str_limit($product->category_id, 10)}}</a>
            </div>
            <a href="#" class="btn btn-primary">COMPANY ID:{{str_limit($product->company_id, 10)}}</a>

          </div>
        </div>
    </div>
    <form class=""  action="{{route('product.delete', $product)}}" method="POST">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-danger" name="button">Trinti</button>
</form>

  <a class="btn btn-warning" href="{{route('product.edit', $product)}}">UPDATE</a>



@endsection
