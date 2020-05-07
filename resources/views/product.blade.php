@extends('layouts.app')

@section('content')
        <div class="card mb-3">
        <h3 class="card-header">{{$product->name}}</h3>
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <h6 class="card-subtitle text-muted">{{$product->subTitle}}</h6>
            </div>
            <img style="display: block;"
                 src="/images/{{$product->image}}"
                 width="200"
                 height="200px"
                 alt="Card image" />
            <div class="card-body"><p class="card-text">{{$product->description}}</p></div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">{{ $product->price }}$</li>
            </ul>
            <div class="card-body">
                <form action="/cart" method="post" style="display: inline;">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button type="submit" class="btn btn-primary "> Add to cart</button>
                </form>
            </div>
        </div>

@endsection
