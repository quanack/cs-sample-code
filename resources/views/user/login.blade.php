<x-main-layout>
    <div class="container m-auto max-w-lg mt-10">
        <div id="content">
            <div class="bg-white shadow rounded-xl p-6 m-8 border border-gray-300">
                <h1 class="font-bold text-xl">Sign In</h1>
                <hr>
                <form action="/user/login" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Email
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded" type="text" name="email" id="email"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded" type="password" name="password"
                            id="password" required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button
                            class="bg-blue-400 hover:bg-blue-600 text-white py-1 px-4 rounded-sm drop-shadow w-full">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
