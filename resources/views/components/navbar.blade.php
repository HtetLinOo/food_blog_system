<nav class="navbar navbar-dark bg-secondary">
    <div class="container">
        <a
            class="navbar-brand"
            href="/"
        >Food Blog</a>
        <div class="d-flex">
            <a
                href="/#blogs"
                class="nav-link text-white"
            >Posts</a>
            @auth
            @can('admin')
            <a
                href="/admin/blogs"
                class="nav-link text-white"
            >Dashboard</a>
            @endcan
            <img
                src="{{auth()->user()->avatar}}"
                width="25"
                height="25"
                class="rounded-circle my-2"
            >
            <a
                href=""
                class="nav-link text-white px-1"
            >{{auth()->user()->name}}</a>
            <form
                action="/logout"
                method="POST"
            >
                @csrf
                <button
                    type="submit"
                    href=""
                    class="nav-link btn btn-link text-white" 
                >Logout</button>
            </form>
            @else
            <a
                href="/register"
                class="nav-link text-white"
            >Register</a>
            <a
                href="/login"
                class="nav-link text-white"
            >Login</a>
            @endauth
            {{-- <a
                href="#subscribe"
                class="nav-link"
            >Subscribe</a> --}}
        </div>
        
    </div>
</nav>