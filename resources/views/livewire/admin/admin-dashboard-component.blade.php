<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Products
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/admin/product/create') }}" class="btn btn-success pull-right">Create New Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row" style="vertical-align: middle;">{{ $product->id }}</th>
                                    <td><img src="{{ asset('assets/images/products/' . $product->img) }}" alt="" width="50"></td>
                                    <td style="vertical-align: middle;">{{ $product->name }}</td>
                                    <td style="vertical-align: middle;">${{ $product->regular_price }}</td>
                                    <td style="vertical-align: middle;">{{ $product->category->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
