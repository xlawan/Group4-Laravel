@include('layouts.welcome')
  
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links color-white">
            @auth
            <a href="{{ url('/admin') }}">Admin</a>
            @else
            <a class="btn btn-info btn-md" style="color: white" href="{{ route('login') }}">Click Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <h1 class="text-center text-light">Group 4: School/Job Attendance System</h1>
                <h2 class="text-center text-light">(Abad, Arnad, Flores, Laro, Lawan)</h2>
                <!-- <div class="clockStyle" id="clock"></div> -->
            </div>

            
        </div>
    </div>

