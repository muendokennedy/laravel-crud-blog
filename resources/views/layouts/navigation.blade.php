<nav class="fixed top-0 z-10 m-auto bg-gray-800 w-full p-4 flex justify-between text-white">
    <div>
        <div class="text-2xl">Laravel</div>
    </div>
    <div class="flex justify-between">
        <a href="/" class="no-underline hover:underline px-4">Home</a>
        <a href="/blog" class="no-underline hover:underline px-4">Blog</a>
        @auth
        <span class="text-lg px-4">{{Auth::user()->name}}</span>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="no-underline hover:underline px-4">
                Logout
            </button>
        </form>
        @else
        <a href="/login" class="no-underline hover:underline px-4">Login</a>
        <a href="/register" class="no-underline hover:underline px-4">Register</a>
        @endauth
    </div>
</nav>
