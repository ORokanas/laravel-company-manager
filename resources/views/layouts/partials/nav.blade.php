<nav class="flex justify-between items-center mb-4">
    <a href="/" class="hover:text-laravel text-lg"><i class="fa-solid fa-home" style="padding-left: 10px"></i>
        Home</a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
        <li>
            <a href="/company" class="hover:text-laravel"><i class="fa-solid fa-building"></i> Companies</a>
        </li>
        <li>
            <form class='inline hover:text-laravel' method='POST' action='/logout'>
                @csrf
                
                <button type='submit'>
                    <i class='fa-solid fa-door-closed'></i> Logout
                </button>
            </form>
        </li>
        
        @else
        <li>
            <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>
        <li>
            <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a>
        </li>
        {{-- <li>
            <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a>
        </li> --}}
        @endauth
    </ul>
</nav>
