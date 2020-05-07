@extends('layouts.app')

@section('content')
        <hr />
        <h1 style="display: inline-block;">Products</h1>
        <a href="/admin/products/create" class="btn btn-success float-right">
            Add Product
        </a>
        <a href="/pdf" class="btn btn-success float-right">
            Export PDF
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">SubTitle</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width: 350px;">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->subTitle}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a href="/admin/products/{{$product->id}}/edit" class="btn btn-outline-primary">Edit</a> |
                            <a href="/admin/products/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
@endsection
