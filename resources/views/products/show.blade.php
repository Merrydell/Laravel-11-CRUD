<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Product
                            <a href="{{ route('products.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label><strong>Product Code:</strong></label>
                            <p>{{ $product->code }}</p>
                        </div>
                        <div class="mb-3">
                            <label><strong>Product Name:</strong></label>
                            <p>{{ $product->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label><strong>Quantity:</strong></label>
                            <p>{{ $product->quantity }}</p>
                        </div>
                        <div class="mb-3">
                            <label><strong>Product Price:</strong></label>
                            <p>${{ number_format($product->price, 2) }}</p>
                        </div>
                        <div class="mb-3">
                            <label><strong>Product Description:</strong></label>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 