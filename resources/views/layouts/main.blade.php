<!DOCTYPE html>
@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="{{asset('css/tailwend.min.css')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/general/favicon.svg')}}" type="image/x-icon">
    <style>
        html[dir="rtl"] footer .email{
            border-radius: 0 8px 8px 0;
        }
        html[dir="rtl"] footer .submit{
            border-radius: 8px 0 0 8px;
        }
        html[dir='rtl'] .project-img {
            margin-left: 2rem;
            margin-right: 0;  
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-xl font-semibold text-gray-800"><img src="{{asset('images/general/favicon.svg')}}" alt="Logo"></a>
            <!-- Navigation -->
            <nav>
                <ul class="flex">
                    <li><a href="{{route('lang', 'en')}}" class="text-gray-600 hover:text-gray-800 mx-2">English</a></li>
                    <span class="text-gray-400"> | </span>
                    <li><a href="{{route('lang', 'ar')}}" class="text-gray-600 hover:text-gray-800 mx-2">العربية</a></li>
                </ul>
            </nav>
            <!-- Authentication -->
                 @if (Route::has('login'))
                 <div>
                    @auth
                        @if (auth()->user()->admin)
                            <a 
                            href="{{ route('dashboard') }}" 
                            class="text-gray-600 hover:text-gray-800">
                                {{__('main.auth.dashboard')}}
                            </a>
                        @else
                            <a 
                            href="{{ route('profile.show') }}" 
                            class="text-gray-600 hover:text-gray-800">
                            {{__('main.auth.profile')}}
                            </a>
                        @endif
                    @else
                        <a 
                        href="{{ route('login') }}" 
                        class="text-gray-600 hover:text-gray-800">
                        {{__('main.auth.login')}}
                        </a>
                        @if (Route::has('register'))
                            <span class="text-gray-400"> | </span>
                            <a 
                            href="{{ route('register') }}" 
                            class="text-gray-600 hover:text-gray-800">
                            {{__('main.auth.register')}}
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>
    @if (session('success'))
            @include('alerts.success')
        @endif
        @if ($errors->any())
            @include('alerts.errors')
        @endif
    @yield('content')
<!-- Footer -->
<footer class="bg-black text-white py-4 mt-4">
    <div class="container mx-auto flex items-center justify-around flex-wrap">
        <h2 class="text-2xl font-semibold m-2">{{__('main.subscribe.text')}}</h2>
        <form class="flex" method="POST" action="{{route('subscribers.store')}}">
            @csrf
            <input type="email" name='email' class="email rounded-l-lg p-4 w-full lg:w-auto bg-gray-100 text-gray-900 outline-none" placeholder="{{__('main.subscribe.placeholder')}}" value="{{isset(auth()->user()->email) ? auth()->user()->email : ''}}">
            <input type="submit" class="submit cursor-pointer bg-gray-900 hover:bg-gray-500 rounded-r-lg px-8 py-4 font-semibold" value="{{__('main.subscribe.button')}}">
        </form>
    </div>
</footer>


</body>
</html>
