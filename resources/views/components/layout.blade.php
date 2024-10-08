<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.png')}}" alt="" class="w-32 h-32">
                </a>
            </div>
            <div class="space-x-6 font-bold text-gray-300">
                <a href="">New Releases</a>
                <a href="">Popular Podcasts</a>
                <a href="">Life Stories</a>
                <a href="">History</a>
                <a href="">Science</a>
                <a href="">literature</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/podcasts/create">Post a Podcast</a>
                    <a href="/mylist">My Own Podcast</a>
                    <a href="">My Favourite List</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[999px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
