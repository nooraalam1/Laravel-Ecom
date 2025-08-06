<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($products as $product)
        <div class="card w-full bg-base-100 shadow-lg hover:shadow-xl transition duration-300">
            <figure class="px-6 pt-6">
                <img src="{{ $product['thumbnail'] }}" alt="{{ $product['title'] }}"
                    class="rounded-xl h-48 object-cover" />
            </figure>
            <div class="card-body px-6 py-4 text-left space-y-2">
                <h2 class="card-title">{{ $product['title'] }}</h2>
                <p class="text-sm text-gray-600">{{ $product['description'] }}</p>

                <div class="grid grid-cols-2 gap-2 text-sm">
                    <p><span class="font-semibold">Category:</span> {{ $product['category'] }}</p>
                    <p><span class="font-semibold">Min Order:</span> {{ $product['minimumOrderQuantity'] }}</p>
                    <p><span class="font-semibold">Rating:</span> {{ $product['rating'] }}</p>
                    <p><span class="font-semibold">Shipping:</span> {{ $product['shippingInformation'] }}</p>
                    <p><span class="font-semibold">Stock:</span> {{ $product['stock'] }}</p>
                    <p><span class="font-semibold">SKU:</span> {{ $product['sku'] }}</p>
                    <p><span class="font-semibold">Weight:</span> {{ $product['weight'] }}</p>
                    <p><span class="font-semibold">Dimensions:</span> {{ implode(' × ', $product['dimensions']) }}</p>
                    <p><span class="font-semibold">Warranty:</span> {{ $product['warrantyInformation'] }}</p>
                    <p class="text-xl"><span class="">Discount:</span> {{ $product['discountPercentage'] }}%</p>
                    <p><span class="font-semibold">Available:</span> {{ $product['availabilityStatus'] }}</p>
                    <p class="text-xl text-orange-600 "><span class="">Price:</span> ${{ $product['price'] }}</p>
                    <p><span class="font-semibold">Barcode:</span> {{ $product['meta']['barcode'] }}</p>
                </div>

                <div class="flex justify-center py-2">
                    <img src="{{ $product['meta']['qrCode'] }}" alt="QR Code" class="h-20" />
                </div>

                <div class="text-sm text-gray-600">
                    <span class="font-semibold">Tags:</span>
                    <span class="text-blue-500">#{{ implode(' #', $product['tags']) }}</span>
                </div>

                <div class="mt-4 flex gap-3">
                    <a class="btn btn-accent w-1/2" onclick="buyNow({{$product['id']}},'{{$product['title']}}')">Buy Now</a>
                    <a class="btn w-1/2" onclick="addToCart({{$product['id']}},'{{$product['title']}}')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="size-[1.2em]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        Add To Cart
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    function buyNow(id,title){
        @auth
            alert(title + ' - Proceeding to buy now.');
            @else
            alert('Please log in to buy this product.');
            window.location.href = "{{ route('login') }}";
        @endauth

    }
function addToCart(id, title) {
    const product = {
        id: id,
        title: title
    };

    // Get existing cart or start with empty array
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Check if product is already in cart
    let exists = cart.find(item => item.id === id);
    if (exists) {
        alert('Product is already in the cart!');
        return;
    }

    // Add new product to cart
    cart.push(product);

    // Save updated cart to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    alert('Added to Cart!');
}

</script>
