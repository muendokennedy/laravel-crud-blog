<nav class="fixed top-0 z-10 m-auto bg-gray-800 w-full p-4 flex justify-between text-white">
    <div>
        <div class="text-2xl">Laravel</div>
    </div>
    <div class="flex justify-between w-1/5">
        <a href="/" class="no-underline hover:underline">Home</a>
        <a href="/blog" class="no-underline hover:underline">Blog</a>
        @auth
        <span class="text-3xl">{{Auth::user()->name}}</span>
        <a href="/logout" class="no-underline hover:underline">Logout</a>
        @endauth
        <a href="/login" class="no-underline hover:underline">Login</a>
        <a href="/register" class="no-underline hover:underline">Register</a>
    </div>
</nav>
