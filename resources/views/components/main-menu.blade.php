<div class="bg-white shadow rounded-b-xl px-6 py-2 mx-8 border-t-2 border-gray-100 text-center">
    <div class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/" class="hover:font-bold">Soil Connect - Sample Code Project</a>
        </div>
        <div class="my-2">
            @if (auth()->check())
                <a href="/user/logout"
                    class="hover:text-red-500 hover:font-bold hover:bg-gray-200 py-2 px-4 rounded-md">Logout</a>
            @else
                <a href="/user/signup"
                    class="hover:text-blue-500 hover:font-bold hover:bg-gray-200 py-2 px-4 rounded-md">Sign Up</a>
                <a href="/user/login"
                    class="hover:text-blue-500 hover:font-bold hover:bg-gray-200 py-2 px-4 rounded-md">Login</a>
            @endif
        </div>
    </div>
</div>
