<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="">
    <header class="">
        @if (Route::has('login'))
            <nav class="md:flex justify-center items-center gap-5">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-ghost">
                        @auth
                            <div class="text-sm font-medium">
                                {{ auth()->user()->name ?? 'User' }}
                            </div>
                        @endauth
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-neutral btn-outline">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-neutral btn-outline">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    @if (Route::has('login'))
        <div class=""></div>
    @endif
</body>

</html>
