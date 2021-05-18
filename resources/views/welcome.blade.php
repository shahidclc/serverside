        @extends('layout')
        @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <img src="images/jetlogo.png" alt="app logo">
                <div class="title m-b-md">
                    SMART PARCELS
                </div>    
                <p class="msg">{{ session('msg') }}</p>
               <button> <a href="/parcels/create">Order your parcel</a> </button>           
            </div>
        </div>
        @endsection
   
