<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <a href="/">
            <img src="/images/logo.svg" alt="Idea Logo" width="100">
        </a>
        <div class="flex items-center gap-4">
            @if(auth()->check())
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Logout</button>
                </form>
            @else
           <a href="/register">Register</a>
           <a href="/login" class="btn btn-secondary">Sign In</a>
            @endif
        </div>
    </div>

</nav>
