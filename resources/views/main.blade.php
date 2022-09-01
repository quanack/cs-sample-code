<x-main-layout>
    <div class="bg-white shadow rounded-xl p-6 m-8">
        <h1 class="font-bold text-xl text-center">Welcome to the Sample Application</h1>
        <hr />
        @if (auth()->check())
            <x-bookmarks />
        @else
            <p class="text-center mt-12">Sing up or login to get started</p>
        @endif
    </div>
</x-main-layout>
