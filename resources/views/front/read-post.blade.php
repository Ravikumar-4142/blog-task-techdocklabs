<x-front-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Read Post.....
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white shadow-md rounded my-6">
                        <div class="flex flex-col space-y-2 m-3">
                            <label for="title" class="text-gray-700 select-none font-medium">Title</label>
                            <h1>{{ $post->title }}</h1>
                        </div>
                        <div class="flex flex-col space-y-2 m-3">
                            <label for="title" class="text-gray-700 select-none font-medium">Description</label>
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded my-6">
                        <div class="md:flex">
                            <div class="md:shrink-0">
                                <h2>Post Comments:</h2>
                                <form method="POST" action="{{ route('post.comment') }}">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id}}">

                                    <div class="flex flex-col space-y-2">
                                        <textarea name="comment" id="comment" placeholder="Write comments here......"
                                            class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                            rows="5">{{ old('comment') }}</textarea>
                                    </div>
                                    <div class="text-left mt-5 mb-5">
                                        <button type="submit"
                                            class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="p-8">
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">List
                                    Comments:</div>
                                @if (count($post->getComments) > 0)
                                @foreach ($post->getComments as $comment)
                                <div class="flex flex-col space-y-2">
                                    <p class="mt-2 text-slate-500">{{ $comment['comment'] }}</p>
                                    <span>-- User: {{ $comment->getUser->name}}</span>
                                </div>
                                @endforeach

                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</x-front-layout>