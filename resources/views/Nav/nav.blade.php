<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body class="bg-purple-50 text-gray-800">

    <!-- Navbar Section -->
    <div class="flex flex-col lg:flex-row justify-between items-center gap-4 py-4 px-6 bg-purple-100">

        <!-- Navigation Buttons -->
        <div class="flex flex-col sm:flex-row items-center gap-3">
            <a href="#" class="btn btn-neutral btn-outline">Home</a>
            <a href="#" class="btn btn-neutral btn-outline">Products</a>
            <a href="#" class="btn btn-neutral btn-outline">About</a>
            <a href="#" class="btn btn-neutral btn-outline">Cart</a>
        </div>

        <!-- Welcome Blade Include -->
        <div class="hidden sm:block">
            @include('welcome')
        </div>
        <div>
        </div>
    </div>

    <!-- Card Section -->
    <div class="p-4">
        @include('cards')
    </div>

</body>
</html>
