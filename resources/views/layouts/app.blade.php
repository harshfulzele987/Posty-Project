<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poty</title>
    <link rel="stylesheet" href="{{  asset('css\app.css')}} ">

</head>

<body class="bg-gray-500">


 <nav class="p-6 bg-gray-800 flex justify-between mb-4">
        <ul class="flex items-center">
            <li>
                <a href="/" class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded">HOME</a>
            </li>
            <li>
                <a href="{{ route ('dashboard') }}" class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded">DASHBOARD</a>
            </li>
            <li>
                <a href="{{ route('post') }} " class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded">POST</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @if (auth()->user())
                <li>
                    <a href="" class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded">{{ auth()->user()->name }} </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" >
                    <!--<a href="{{ route('logout') }} " class="p-3">log out </a>-->
                    @csrf
                    <button class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded">Log out </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }} " class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded">log in</a>
                </li>
                <li>
                    <a href="{{ route ('register') }} " class="inline-flex items-center justify-center p-2 rounded-md  hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white p-3 text-white rounded"> Register</a>
                </li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>

</html>