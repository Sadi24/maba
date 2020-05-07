<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">SubTitle</th>
            <th scope="col">Price</th>
            <th scope="col" style="width: 350px;">Description</th>
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
            </tr>
        @endforeach

    </tbody>
</table>
