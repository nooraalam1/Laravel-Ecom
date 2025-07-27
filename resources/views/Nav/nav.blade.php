<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
        <div class="md:flex justify-center items-center gap-5 py-5 bg-purple-200">

        <div class="md:flex justify-center items-center gap-5">
            <a href="#" class="btn btn-neutral btn-outline">Home</a>
            <a href="#" class="btn btn-neutral btn-outline">Products</a>
            <a href="#" class="btn btn-neutral btn-outline">About</a>
            <a href="#" class="btn btn-neutral btn-outline">Cart</a>
        </div>
        @include('welcome')
        </div>

        <div class="">
            @foreach ($products as $product)
    <div class="border p-4 mb-4">
        <h2 class="text-xl font-bold">{{ $product['title'] }}</h2>
        <img src="{{ $product['thumbnail'] }}" alt="{{ $product['title'] }}" class="w-32 h-auto my-2">
        <p>{{ $product['description'] }}</p>
        <p><strong>Category:</strong> {{ $product['category'] }}</p>
        <p><strong>Price:</strong> ${{ $product['price'] }}</p>
        <p><strong>Discount:</strong> {{ $product['discountPercentage'] }}%</p>
        <p><strong>Rating:</strong> {{ $product['rating'] }}/5</p>

        <p><strong>Tags:</strong> {{ implode(', ', $product['tags']) }}</p>
        <p><strong>SKU:</strong> {{ $product['sku'] }}</p>
        <p><strong>Stock:</strong> {{ $product['stock'] }}</p>

        <p><strong>Warranty:</strong> {{ $product['warrantyInformation'] }}</p>
        <p><strong>Shipping:</strong> {{ $product['shippingInformation'] }}</p>
        <p><strong>Status:</strong> {{ $product['availabilityStatus'] }}</p>

        <div class="mt-2">
            <strong>Reviews:</strong>
            <ul class="ml-4 list-disc">
                @foreach ($product['reviews'] as $review)
                    <li>
                        <strong>{{ $review['reviewerName'] }}</strong> ({{ $review['rating'] }}/5): {{ $review['comment'] }}
                    </li>
                @endforeach
            </ul>
        </div>

        <p><strong>Return Policy:</strong> {{ $product['returnPolicy'] }}</p>
        <p><strong>Min Order Quantity:</strong> {{ $product['minimumOrderQuantity'] }}</p>

        <p><strong>Barcode:</strong> {{ $product['meta']['barcode'] }}</p>
        <img src="{{ $product['meta']['qrCode'] }}" alt="QR Code" class="w-16 mt-2">
    </div>
@endforeach

        </div>
</body>
</html>
