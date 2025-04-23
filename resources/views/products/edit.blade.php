<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product
                            <a href="{{ route('products.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Product Code</label>
                                <input type="text" name="code" value="{{ $product->code }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" required min="1">
                            </div>
                            <div class="mb-3">
                                <label>Product Price</label>
                                <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="form-control" required min="0">
                            </div>
                            <div class="mb-3">
                                <label>Product Description</label>
                                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 