<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
<script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col justify-center bg-gray-100 py-6 sm:py-12">
        <div class="relative overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6">
                <div class="text-center">
                    <h1 class="text-4xl font-bold mb-6">Welcome to Laravel!</h1>
                    <p class="text-lg mb-6">This is a simple Laravel application using Breeze for authentication.</p>

                    @if (Route::has('login'))
                        <div class="mt-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-blue-500 hover:underline">Go to Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
                                <a href="{{ route('register') }}" class="ml-4 text-blue-500 hover:underline">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
