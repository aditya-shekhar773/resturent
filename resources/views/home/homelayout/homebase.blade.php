<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="header-2 sticky top-0">
        <nav class="bg-stone-900 py-2 md:py-2">
            <div class="container mx-auto md:flex md:items-center">
                <div class="flex justify-between items-center pr-4">
                    <a href="{{route('home')}}" class="text-white font-extrabold font-serif text-center text-xl p-2 first-letter:text-4xl first-letter:text-green-800">
                        Resturent
                    </a>
                    <button
                        class="border border-solid text-white border-gray-600 px-3 py-1 rounded  opacity-50 hover:opacity-75 md:hidden"
                        id="navbar-toggle">
                        &#9776;
                    </button>
                </div>

                <div class="hidden md:flex flex-col md:flex-row md:ml-auto md:mt-0" id="navbar-collapse">
                    <a href="{{route('home')}}" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg md:text-center text-white font-medium">Home</a>
                    <a href="#" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg md:text-center  md:mx-1 text-white font-medium">About</a>
                    <a href="#" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg md:text-center  md:mx-1 text-white font-medium">Contact</a>
                    @auth
                    <a href="#" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg  md:mx-1 text-white md:text-center font-medium">My Account</a>
                    <a href="{{route('home.logout')}}" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg  md:mx-1 text-white md:text-center font-medium">Logout</a>
                    <a href="#" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg  md:mx-1 text-white md:text-center font-medium">{{auth()->user()->name}}</a>
                    @endauth 
                    @guest    
                        <a href="{{route('home.login')}}" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg  md:mx-1 text-white md:text-center font-medium">Login</a>
                        <a href="{{route('home.register')}}" class="first-letter:text-green-800 first-letter:font-extrabold p-2 font-serif text-lg  md:mx-1 text-white md:text-center font-medium">Register</a>
                    @endguest   
                </div>
            </div>
        </nav>
    </div>

    <script>
        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");

        toggleBtn.onclick = () => {
            collapse.classList.toggle("hidden");
            collapse.classList.toggle("flex");
        };
    </script>
    @yield('content')
</body>
</html>