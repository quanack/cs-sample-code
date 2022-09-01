<div class="p-6">
    <div class="container m-auto max-w-2xl mt-5">
        <div id="content">
            <div class="bg-white shadow rounded-xl p-6 m-8 border border-gray-300">
                <h1 class="font-bold text-xl">Bookmark Management</h1>
                <hr />
                <div>
                    @foreach ($bookmarks as $bookmark)
                        <a href="{{ $bookmark->url }}" target="_blank">
                            <div
                                class="hover:text-blue-600 hover:font-bold p-2 hover:bg-gray-200 rounded-md hover:shadow-md w-full bg-gray-100 my-2">
                                {{ $bookmark->title }} ({{ $bookmark->url }})
                            </div>
                        </a>
                    @endforeach
                    @if (!$bookmarks->count())
                        <p class="text-center m-6">No bookmarks yet</p>
                    @endif
                </div>
                <hr />
                <form action="addbookmark" method="POST" class="mt-4" id="bookmark_form">
                    @csrf
                    <div class="md:flex items-center">
                        <label for="name" class="mb-2 uppercase font-bold text-sm text-gray-700 w-36">
                            Bookmark Title:
                        </label>
                        <input class="border border-gray-400 p-2 rounded flex-grow md:mx-2" type="text"
                            name="title" id="title" value="{{ old('title') }}">

                    </div>
                    <div class="md:flex items-center">
                        <label for="name" class="mb-2 uppercase font-bold text-sm text-gray-700 w-36">
                            Bookmark URL:
                        </label>
                        <input class="border border-gray-400 p-2 rounded flex-grow md:mx-2" type="text"
                            name="url" id="url" value="{{ old('url') }}">

                    </div>
                    <div class="md:flex items-center">
                        <button class="bg-blue-400 hover:bg-blue-600 text-white py-2 px-4 rounded-sm my-2 md:my-0">Add
                            Bookmark</button>
                        @error('title')
                            <p class="text-red-500 text-xs m-2">{{ $message }}</p>
                        @enderror
                        @error('url')
                            <p class="text-red-500 text-xs m-2">{{ $message }}</p>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
